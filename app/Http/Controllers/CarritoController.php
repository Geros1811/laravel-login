<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosCurso;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Checkout\Session;


class CarritoController extends Controller
{

   

    public function addToCart(Request $request)
    {
        try {
            $course_id = $request->input('course_id');
            $course = DatosCurso::findOrFail($course_id);
    
            $cart = session()->get('cart') ?? [];
    
            if (isset($cart[$course_id])) {
                // Curso ya en el carrito, no hagas nada o actualiza la cantidad si es necesario
            } else {
                $cart[$course_id] = [
                    "title" => $course->title,
                    "price" => $course->price,
                ];
            }
    
            session()->put('cart', $cart);
    
            return redirect()->back()->with('success', 'Curso añadido al carrito con éxito.');
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'El curso no existe');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Error interno del servidor');
        }
    }

    public function removeFromCart(Request $request)
    {
        try {
            $course_id = $request->input('course_id');
            $cart = session()->get('cart') ?? [];

            if (isset($cart[$course_id])) {
                unset($cart[$course_id]);
                session()->put('cart', $cart);

                return redirect()->back()->with('success', 'Curso eliminado del carrito con éxito.');
            }

            return redirect()->back()->with('error', 'El curso no está en el carrito.');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Error interno del servidor');
        }
    }

    public function getTotal()
    {
        $cart = session()->get('cart') ?? [];
        $total = 0;
    
        foreach ($cart as $course) {
            $total += $course['price'];
        }
    
        return $total;
    }


    public function index()
    {
        $courses = Course::all();
        
        $cart = session()->get('cart') ?? [];
        $totalCart = $this->getTotal(); // Calcula el total del carrito
        
        // Agrega la clave 'quantity' con valor 1 para cada curso en el carrito si no está definida
        foreach ($cart as $course_id => $course) {
            if (!isset($course['quantity'])) {
                $cart[$course_id]['quantity'] = 1;
            }
        }
        
        return view('cursos.index', compact('courses', 'cart', 'totalCart')); // Pasa $totalCart a la vista
    }
    
    public function checkout(Request $request)
    {
        try {
            // Obtener los cursos del carrito desde la sesión
            $cart = session()->get('cart') ?? [];

            // Configurar las claves de la API de Stripe
            Stripe::setApiKey(env('sk_test_51OXSQHDoFxv8ulDuhZnuh3oT64UHRWai95QXJVabjoD5JokJxnYCBGeV4DeiE47NXUZvNQXWezL8v9xwIRUJ9uGM00CuN0CpEc'));

            // Crear un arreglo para almacenar los detalles de los productos
            $lineItems = [];
            foreach ($cart as $course_id => $course) {
                // Obtener el curso desde la base de datos
                $curso = DatosCurso::findOrFail($course_id);

                // Agregar el curso a los detalles del pedido
                $lineItems[] = [
                    'price_data' => [
                        'currency' => 'usd', // Cambia esto según tu moneda
                        'unit_amount' => $curso->price * 100, // Convertir a centavos
                        'product_data' => [
                            'name' => $curso->title, // Nombre del curso en Stripe
                            // Puedes agregar más detalles del producto si es necesario
                        ],
                    ],
                    'quantity' => 1, // Cantidad fija por curso
                ];
            }

            // Crear un pago en Stripe
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => $lineItems,
                'mode' => 'payment',
                'success_url' => route('checkout.success'), // URL a la que redirigir después de un pago exitoso
                'cancel_url' => route('checkout.cancel'), // URL a la que redirigir si el pago es cancelado
            ]);

            // Redirigir al cliente a la página de pago de Stripe
            return redirect($session->url);
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Error en el pago: ' . $exception->getMessage());
        }
    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosCurso;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\Price;
use Stripe\Product;
use Illuminate\Support\Facades\Log; 


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


    
    
    public function checkout(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.api_key'));
        
        try {
            // Obtener los cursos del carrito desde la sesión
            $cart = session()->get('cart') ?? [];
    
            // Crear la sesión de pago en Stripe
            $session = $this->createStripeCheckoutSession($cart);
    
            // Redirigir al cliente a la página de pago de Stripe
            return redirect($session->url);
        } catch (\Exception $exception) {
            // Registrar el error
            Log::error('Error en el pago: ' . $exception->getMessage());
    
            // Redirigir con un mensaje de error
            return redirect()->back()->with('error', 'Error en el pago: ' . $exception->getMessage());
        }
    }
    
    private function createStripeCheckoutSession($cart)
    {
        $lineItems = [];
    
        foreach ($cart as $course_id => $course) {
            try {
                // Obtener el curso desde la base de datos
                $curso = DatosCurso::findOrFail($course_id);
    
                // Obtener la clave del precio asociado al curso
                $priceKey = $curso->price_key;
    
                // Agregar el curso como item de la línea
                $lineItems[] = [
                    'price' => $priceKey, // Utilizar la clave del precio como identificador único
                    'quantity' => 1,
                ];
            } catch (ModelNotFoundException $exception) {
                // Registrar un error si no se encuentra el curso
                Log::error('Curso no encontrado con ID: ' . $course_id);
                // Otra opción: continuar con el siguiente curso en lugar de terminar el proceso
            }
        }
    
        // Crear la sesión de pago en Stripe con los items de línea configurados
        return Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
        ]);
    }
    
}
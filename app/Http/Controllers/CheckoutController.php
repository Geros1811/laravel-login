<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\DatosCurso;


class CheckoutController extends Controller
{

    public function showCheckoutForm()
    {
        // Carga la vista 'checkout' que has creado en lugar de la página de Stripe
        return view('checkout');
    }

    public function createCheckoutSession(Request $request)
    {
        // Configurar la API de Stripe con tu clave secreta
        Stripe::setApiKey(config('services.stripe.secret'));
    
        // Obtener los datos del cliente del formulario de compra
        $name = $request->input('name');
        $email = $request->input('email');
    
        // Obtener el ID del curso
        $courseId = $request->input('course_id');
        $course = DatosCurso::findOrFail($courseId);
    
        // Crear una sesión de pago con Stripe
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $course->title,
                        ],
                        'unit_amount' => $course->price * 100, // Precio en centavos
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('payment.success'), // URL de éxito del pago
            'cancel_url' => route('payment.cancel'),   // URL de cancelación del pago
            'customer_email' => $email,                // Correo electrónico del cliente
            'metadata' => [
                'course_id' => $courseId, // Agregar la ID del curso como metadato
            ],
        ]);
    
        // Guardar el ID de la sesión de Stripe en la base de datos como 'transaction_id'
        Transaction::create([
            'course_id' => $courseId,
            'transaction_id' => $session->id, // Guardar el ID de la sesión de Stripe como 'transaction_id'
            'status' => 'pending', // Puedes establecerlo como pendiente inicialmente
            'user_id' => Auth::id(), // Obtener el ID del usuario autenticado
        ]);
    
        // Redirigir al cliente a la página de pago de Stripe
        return redirect($session->url);
    }

    public function processTransaction(Request $request)
    {
        // Lógica para procesar la transacción una vez que se complete el pago
        // Por ejemplo, puedes guardar los detalles de la transacción en la base de datos

        Transaction::create([
            'course_id' => $request->course_id,
            'transaction_id' => $request->transaction_id, // Asegúrate de tener esta información disponible
            'status' => 'completed', // O cualquier estado que corresponda
            'user_id' => Auth::id(), // Obtener el ID del usuario autenticado
        ]);

        // Redirigir al usuario a una página de confirmación o mostrar un mensaje de éxito
        return view('payment.success')->with('message', 'El pago se ha procesado exitosamente.');
    }
}





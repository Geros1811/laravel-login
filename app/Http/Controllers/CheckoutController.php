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
        // Obtener el ID de la sesión de Stripe (transaction_id) si está disponible
        $transaction_id = Auth::user()->transaction ? Auth::user()->transaction->transaction_id : null;
    
        // Pasar la transaction_id a la vista
        return view('checkout', compact('transaction_id'));
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
    try {
        // Lógica para procesar la transacción una vez que se complete el pago
        Transaction::create([
            'course_id' => $request->course_id,
            'transaction_id' => $request->transaction_id,
            'status' => 'completed',
            'user_id' => Auth::id(),
        ]);

        // Imprimir los datos en la consola
        \Log::info('Datos guardados en la base de datos:', [
            'course_id' => $request->course_id,
            'transaction_id' => $request->transaction_id,
            'user_id' => Auth::id(),
        ]);

        // Redirigir al cliente a la página de Stripe
        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        // Manejar la excepción
        \Log::error('Error al procesar la transacción: ' . $e->getMessage());

        return response()->json(['error' => 'Error al procesar la transacción: ' . $e->getMessage()], 500);
    }
}
}





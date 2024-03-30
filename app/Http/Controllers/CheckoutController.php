<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosCurso;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class CheckoutController extends Controller
{
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
        ]);

        // Redirigir al cliente a la página de pago de Stripe
        return redirect($session->url);
    }
}

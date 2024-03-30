<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function success(Request $request)
    {
        // Lógica para manejar el pago exitoso
        // Puedes mostrar un mensaje de éxito aquí
        return view('payment.success', ['message' => 'El pago se ha procesado exitosamente.']);
    }

    public function cancel(Request $request)
    {
        // Lógica para manejar el pago cancelado
        // Puedes mostrar un mensaje de cancelación aquí
        return view('payment.cancel', ['message' => 'El pago se ha cancelado.']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction; // Importar el modelo Transaction
use Illuminate\Support\Facades\Auth; // Importar la clase Auth
use Illuminate\Support\Facades\Log;


class PaymentController extends Controller
{
    public function success(Request $request)
    {
        // Obtener los datos de la solicitud
        $requestData = $request->all();

        // Imprimir los datos en la consola
        Log::info('Datos de la solicitud:', $requestData);

        // Guardar datos en la tabla de transacciones
        Transaction::create([
            'course_id' => $request->course_id,
            'transaction_id' => $request->transaction_id,
            'status' => 'completed',
            'user_id' => Auth::id(),
        ]);

        // Redirigir al usuario a una página de confirmación o mostrar un mensaje de éxito
        return view('payment.success')->with('message', 'El pago se ha procesado exitosamente.');
    }

    public function cancel(Request $request)
    {
        // Lógica para manejar el pago cancelado
        // Puedes mostrar un mensaje de cancelación aquí
        return view('payment.cancel', ['message' => 'El pago se ha cancelado.']);
    }
}

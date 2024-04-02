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
        // Obtener la transacción pendiente para el usuario y el curso
        $pendingTransaction = Transaction::where('user_id', Auth::id())
            ->where('status', 'pending')
            ->latest()
            ->first();

        if ($pendingTransaction) {
            // Actualizar el estado de la transacción a "completado"
            $pendingTransaction->update(['status' => 'completed']);

            // Imprimir los datos en la consola
            Log::info('La transacción se ha marcado como completada:', $pendingTransaction->toArray());
        }

        // Lógica adicional después de que el pago se haya procesado correctamente
        // Aquí puedes redirigir al usuario a una página de confirmación o realizar otras acciones necesarias

        return view('payment.success')->with('message', 'El pago se ha procesado exitosamente.');
    }

    public function cancel(Request $request)
    {
        // Obtener la transacción pendiente para el usuario y el curso
        $pendingTransaction = Transaction::where('user_id', Auth::id())
            ->where('status', 'pending')
            ->latest()
            ->first();

        if ($pendingTransaction) {
            // Actualizar el estado de la transacción a "cancelado"
            $pendingTransaction->update(['status' => 'failed']);

            // Imprimir los datos en la consola
            Log::info('La transacción se ha marcado como cancelada:', $pendingTransaction->toArray());
        }

        // Lógica para manejar el pago cancelado
        // Puedes mostrar un mensaje de cancelación aquí
        return view('payment.cancel', ['message' => 'El pago se ha cancelado.']);
    }
}



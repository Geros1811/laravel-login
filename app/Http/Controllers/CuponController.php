<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Cupon;
use Illuminate\Support\Facades\Log; // Importa la clase Log

class CuponController extends Controller
{
    // Método para mostrar el formulario de generación de cupones
    public function showGenerateForm()
    {
        // Aquí retornarás la vista para la generación de cupones
        return view('cupones.generate');
    }

    // Método para generar un nuevo cupón
    public function generarCupon(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'porcentaje_descuento' => 'required|integer|min:1|max:100', // Validar el porcentaje de descuento
            'fecha_caducidad' => 'required|date|after:today', // Validar la fecha de expiración
        ]);

        // Generar un código de cupón aleatorio
        $codigoCupon = strtoupper(Str::random(8)); // Puedes ajustar la longitud del código según tus necesidades

        // Crear el nuevo cupón en la base de datos
        $cupon = new Cupon();
        $cupon->codigo = $codigoCupon;
        $cupon->porcentaje_descuento = $request->input('porcentaje_descuento');
        $cupon->fecha_caducidad = $request->input('fecha_caducidad');
        $cupon->save();

        // Agrega estos mensajes de depuración
        if ($cupon->save()) {
            dd('Cupón guardado correctamente');
        } else {
            dd('Error al guardar el cupón');
        }
    }

    // Otros métodos para administrar los cupones, como editar, eliminar, listar, etc.
}
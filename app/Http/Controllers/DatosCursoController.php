<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosCurso;

class DatosCursoController extends Controller
{
    public function obtenerCursos()
    {
        $courses = DatosCurso::paginate(11);
        $carrito = session()->get('carrito', []);
    
        return view('datos_curso.index', compact('courses', 'carrito'));
    }
    
    public function success(Request $request)
{
    // Registra un mensaje de éxito en la consola
    Log::info('Pago completado con éxito.');

    // Aquí puedes redirigir a una página de "gracias por su compra" o hacer cualquier otra acción necesaria
}

}


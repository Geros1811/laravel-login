<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosCurso;

class DatosCursoController extends Controller
{
    public function obtenerCursos()
    {
        $courses = DatosCurso::all();
        $carrito = session()->get('carrito', []);
    
        return view('datos_curso.index', compact('courses', 'carrito'));
    }
    


}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosCurso;
use App\Models\Membresia;

class DatosCursoController extends Controller
{
    public function obtenerCursos()
    {
        $courses = DatosCurso::paginate(11);
        $carrito = session()->get('carrito', []);
        $cursosActivos = $this->getCursosActivos(); // Obtener los cursos activos del usuario
    
        return view('datos_curso.index', compact('courses', 'carrito', 'cursosActivos'));
    }

    public function detalle($id)
    {
        $curso = DatosCurso::findOrFail($id);
        $cursosActivos = $this->getCursosActivos(); // Obtener los cursos activos del usuario
        
        
        return view('datos_curso.detalle', compact('curso', 'cursosActivos'));
    }

    // Método para obtener los cursos activos del usuario
    private function getCursosActivos()
    {
        // Obtener el ID del usuario autenticado
        $userId = auth()->id();

        // Consultar los cursos activos del usuario
        $cursosActivos = Membresia::where('user_id', $userId)
            ->where('status', 'active')
            ->pluck('course_id')
            ->toArray();

        return $cursosActivos;
    }
}


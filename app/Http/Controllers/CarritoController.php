<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosCurso;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CarritoController extends Controller
{
    public function addToCart(Request $request)
{
    try {
        $course_id = $request->input('course_id');
        $course = DatosCurso::findOrFail($course_id);

        $cart = session()->get('cart') ?? [];

        if (isset($cart[$course_id])) {
            // Curso ya en el carrito, no hagas nada o actualiza la cantidad si es necesario
        } else {
            $cart[$course_id] = [
                "title" => $course->title,
                "price" => $course->price,
                // "quantity" => 1  // No necesitas la cantidad en este caso
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Curso añadido al carrito con éxito.');
    } catch (ModelNotFoundException $exception) {
        return redirect()->back()->with('error', 'El curso no existe');
    } catch (\Exception $exception) {
        return redirect()->back()->with('error', 'Error interno del servidor');
    }
}

    public function removeFromCart(Request $request)
    {
        try {
            $course_id = $request->input('course_id');
            $cart = session()->get('cart') ?? [];

            if (isset($cart[$course_id])) {
                unset($cart[$course_id]);
                session()->put('cart', $cart);

                return redirect()->back()->with('success', 'Curso eliminado del carrito con éxito.');
            }

            return redirect()->back()->with('error', 'El curso no está en el carrito.');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Error interno del servidor');
        }
    }

    public function index()
    {
        $courses = Course::all();
    
        $cart = session()->get('cart') ?? [];
    
        return view('cursos.index', compact('courses', 'cart'));
    }

}

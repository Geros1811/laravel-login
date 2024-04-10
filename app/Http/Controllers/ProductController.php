<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function productos()
    {
        $productos = Product::orderBy('created_at')->get();
        return view(
            'productos.lista',
            [
                'productos' => $productos,
            ]
        );
    }

    // Funcion para crear el producto
    public function create()
    {
        return view('productos.crear');
    }

    // Funcion para mandar los cursos a la base  de datos
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'description' => 'required|max:100',
            'price' => 'required|numeric',
            'Duracion' => 'required',
            'categoria' => 'required|numeric',
        ];

        if ($request->hasFile('imgC')) {
            $rules['imgC'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('productos.crear')->withErrors($validator)->withInput();
        }

        // Crear una instancia del producto
        $curso = new Product();
        $curso->title = $request->title;
        $curso->description = $request->description;
        $curso->price = $request->price;
        $curso->Duracion = $request->Duracion;
        $curso->categoria = $request->categoria;
        $curso->Reg_STPS = 'STI160811C4A';
        $curso->nom_cap = 'S.A. DE C.V';
        $curso->apep_cap = 'SAR SOLUTIONS';
        $curso->apem_cap = 'TECNOLOGÍA E INNOVACIÓN';
        $curso->firma = 'sarc@sti.com.mx';

        if ($request->hasFile('imgC')) {
            $image = $request->file('imgC');

            $imageData = file_get_contents($image->getRealPath());

            $curso->imgC = $imageData;
        }

        // Guardar el producto en la base de datos
        $curso->save();

        return redirect()->route('productos.productos')->with('success', 'Curso Creado Correctamente!');
    }




    // Funcion para editar los productos 
    public function editar($id)
    {
        $producto = Product::findOrFail($id);
        return view("productos.editar", [
            "producto" => $producto,
        ]);
    }

    // Funcion para mandar los cursos actualizados a la base  de datos
    public function update($id, Request $request)
    {
        $producto = Product::findOrFail($id);

        $rules = [
            'title' => 'required',
            'description' => 'required|max:100',
            'price' => 'required|numeric',
            'Duracion' => 'required',
            'categoria' => 'required|numeric',
        ];

        if ($request->hasFile('imgC')) {
            $rules['imgC'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('productos.editar', $producto->id)->withErrors($validator)->withInput();
        }

        // Actualizar los campos del producto
        $producto->title = $request->title;
        $producto->description = $request->description;
        $producto->price = $request->price;
        $producto->Duracion = $request->Duracion;
        $producto->categoria = $request->categoria;

        // Eliminar la imagen anterior si se proporciona una nueva
        if ($request->hasFile('imgC')) {
            if ($producto->imgC) {
                // Eliminar la imagen anterior de la base de datos
                $producto->imgC = null; // Eliminar la referencia a la imagen anterior
            }

            // Guardar la nueva imagen en la base de datos
            $image = $request->file('imgC');
            $imageData = file_get_contents($image->getRealPath());
            $producto->imgC = $imageData;
        }

        // Guardar los cambios en la base de datos
        $producto->save();

        return redirect()->route('productos.productos')->with('success', 'Curso actualizado Correctamente!');
    }



    // Funcion para elininar algun curso del BD
    public function destroy($id)
    {
        $producto = Product::findOrFail($id);

        $imagen = $producto->imgC;

        // Eliminar la imagen del almacenamiento local
        if ($imagen) {
            $rutaImagen = public_path('uploads/cursos/' . $imagen);
            if (file_exists($rutaImagen)) {
                unlink($rutaImagen);
            }
        }

        $producto->delete();

        return redirect()->route('productos.productos')->with('success', 'Curso eliminado correctamente');
    }
}

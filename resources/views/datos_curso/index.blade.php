 <style>
        /* body {
            font-family: Arial, sans-serif;
        } */
        .curso-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 200px;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            vertical-align: top;
        }
        .curso-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .curso-card h2 {
            font-size: 18px;
            margin: 10px 0;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
        }
    </style>

 @extends('layouts.tienda')

 @section('titulo', 'Cursos')

 @section('contenido')
     <h1>Listado de Cursos</h1>
     <a href="#" class="btn">Carrito</a>

     <!-- Muestra el carrito -->
     @if (!empty($carrito))
         <h2>Carrito</h2>
         @foreach ($carrito as $curso)
             <div class="curso-card">
                 <img src="data:image/jpeg;base64,{{ base64_encode($curso->ImgC) }}" alt="Imagen del curso">
                 <h3>{{ $curso->Curso }}</h3>
                 <p>Precio: ${{ $curso->categoria }}</p>
             </div>
         @endforeach
     @else
         <p>El carrito está vacío.</p>
     @endif

     <!-- Muestra los cursos -->
     @foreach ($datos_curso as $curso)
         <div class="curso-card">
             <img src="data:image/jpeg;base64,{{ base64_encode($curso->ImgC) }}" alt="Imagen del curso">
             <h2>{{ $curso->Curso }}</h2>
             <p>Duración: {{ $curso->Duracion }}</p>
             <p>Capacitador: {{ $curso->apep_cap }} {{ $curso->apem_cap }}</p>
             <p>Precio ${{ $curso->categoria }}</p>
             <a href="{{ url('/agregar_al_carrito/' . $curso->ID_Cursos) }}" class="btn">Comprar</a>
         </div>
     @endforeach

 @endsection

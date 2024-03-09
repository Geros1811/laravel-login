 <style>
        /* body {
            font-family: Arial, sans-serif;
        }
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

        .carrito-container {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 10px;
        margin-top: 20px;
    }
        
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

        .carrito-container {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 10px;
        margin-top: 20px;
        background-color: white; /* Añadir un color de fondo blanco */
    }

    .carrito-btn-container {
        text-align: right;
        margin-right: 20px;
    }

    #toggleCartBtn {
        /* Eliminar background-color para evitar transparencia */
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    #cartContainer {
        position: fixed;
        top: 50px;
        right: 20px;
        display: none;
        z-index: 999;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 10px;
        background-color: white; /* Añadir un color de fondo blanco */
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

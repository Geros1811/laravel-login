<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Cursos</title>
    <style>
        body {
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
</head>
<body>
    <h1>Listado de Cursos</h1>
    <a href="#" class="btn">Carrito</a>

<!-- Muestra el carrito -->
@if (!empty($carrito))
    <h2>Carrito</h2>
    @foreach($carrito as $curso)
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
@foreach($datos_curso as $curso)
    <div class="curso-card">
        <img src="data:image/jpeg;base64,{{ base64_encode($curso->ImgC) }}" alt="Imagen del curso">
        <h2>{{ $curso->Curso }}</h2>
        <p>Duración: {{ $curso->Duracion }}</p>
        <p>Capacitador: {{ $curso->apep_cap }} {{ $curso->apem_cap }}</p>
        <p>Precio ${{ $curso->categoria }}</p>
        <a href="{{ url('/agregar_al_carrito/' . $curso->ID_Cursos) }}" class="btn">Comprar</a>
    </div>
@endforeach


</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@extends('layouts.tienda')

@section('titulo', 'Cursos')

@section('contenido')


<button id="toggleCartBtn">Mostrar Carrito</button>

<div class="carrito-container" id="cartContainer" style="display: none;">
    <h2>Carrito de compras</h2>

        <div class="carrito-container">
            <table>
                <thead>
                    <tr>
                        <th>Curso</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th>Acciones</th> <!-- Nueva columna para las acciones -->
                    </tr>
                </thead>
                <tbody>
                    @foreach (session('cart') ?? [] as $course_id => $course)
                        <tr>
                            <td>{{ $course['title'] }}</td>
                            <td>${{ $course['price'] }}</td>
                            <td>{{ $course['quantity'] }}</td>
                            <td>${{ $course['price'] * $course['quantity'] }}</td>
                            <td>
                                <form action="{{ route('remove.from.cart') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="course_id" value="{{ $course_id }}">
                                    <button type="submit" class="eliminar-del-carrito">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

</div>




    <h1>Listado de Cursos</h1>

    <!-- Muestra los cursos -->
    @foreach ($courses as $curso)
        <div class="curso-card">
            <img src="data:image/jpeg;base64,{{ base64_encode($curso->ImgC) }}" alt="Imagen del curso">
            <h2>{{ $curso->title }}</h2>
            <p>Duración: {{ $curso->Duracion }}</p>
            <p>Capacitador: {{ $curso->apep_cap }} {{ $curso->apem_cap }}</p>
            <p>Precio ${{ $curso->price }}</p>

            <!-- Formulario para añadir al carrito (sin AJAX) -->
            <form action="{{ route('add.to.cart') }}" method="post">
                @csrf
                <input type="hidden" name="course_id" value="{{ $curso->id }}">
                <button type="submit" class="agregar-al-carrito">Añadir al carrito</button>
            </form>
        </div>
    @endforeach

    
    <script>
        $(document).ready(function() {
            // Muestra u oculta el carrito al hacer clic en el botón
            $('#toggleCartBtn').on('click', function() {
                $('#cartContainer').toggle();
            });
        });
    </script>
@endsection

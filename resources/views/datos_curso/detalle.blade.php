<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/detallesCursos.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@extends('layouts.tienda')

@section('titulo', 'Cursos')

@section('contenido')

<main class="card-containers">
    <div class="container">
        <div class="course-details">
            <h1>{{ $curso->title }}</h1>
            <img src="data:image/jpeg;base64,{{ base64_encode($curso->ImgC) }}" alt="Imagen del curso">
        </div>
        <div class="course-info">
            <p><b>Descripción:</b> {{ $curso->description }}</p>
            <p><b>Duración:</b> {{ $curso->Duracion }}</p>
            <p class="price"><b>Precio:</b> ${{ $curso->price }} <span style="color: #888;">(Membresía)</span></p>
        </div>
        
        <!-- Formulario de compra con los datos del cliente -->
        <form action="{{ route('checkout') }}" method="POST">
            @csrf
            <!-- Campo oculto para el course_id -->
            <input type="hidden" name="course_id" value="{{ $curso->id }}">
            <!-- Otros campos del formulario (nombre, email, etc.) -->
            <input type="hidden" name="name" value="{{ Auth::check() ? Auth::user()->name : '' }}">
            <input type="hidden" name="email" value="{{ Auth::check() ? Auth::user()->email : '' }}">
            @guest
                <button type="button" class="buy-button buy-button-disabled" onclick="showLoginModal()">Comprar</button>
                <p>Debes iniciar sesión para realizar la compra.</p>
            @else
                <button type="submit" class="buy-button">Comprar</button>
            @endguest
        </form>
        
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('form').addEventListener('submit', function(event) {
                event.preventDefault(); // Evitar que el formulario se envíe automáticamente
    
                // Obtener el valor del campo course_id
                var courseId = document.querySelector('input[name="course_id"]').value;
    
                // Imprimir el valor en la consola del navegador
                console.log('Course ID:', courseId);
    
                // Enviar el formulario manualmente
                this.submit();
            });
        });
    </script>

</main>



@endsection

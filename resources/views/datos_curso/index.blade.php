<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/indexCursos.css') }}">


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@extends('layouts.tienda')

@section('titulo', 'Cursos')

@section('contenido')

{{-- .agregar-al-carrito.disabled {
    background-color: #ccc;
    /* Cambia el color de fondo del botón desactivado */
    cursor: not-allowed;
    /* Cambia el cursor al pasar sobre el botón desactivado */
} --}}

    <div class="titulo">
        <h1>
            ¡Aprende, Avanza, Triunfa!
        </h1>
        <p>
            Descubre Nuestros Cursos Ahora.
        </p>
    </div>

    <main class="card-containers">

        @foreach ($courses as $curso)
        <a href="{{ route('curso.detalle', ['id' => $curso->id]) }}" class="curso-link">
            <div class="curso-card">
                <img src="data:image/jpeg;base64,{{ base64_encode($curso->ImgC) }}" alt="Imagen del curso">
                <h1>{{ $curso->title }}</h1>
                <p>Duración: {{ $curso->Duracion }}</p>
                <h3><b>Capacitador:</b><br>{{ $curso->apep_cap }} {{ $curso->apem_cap }}</h3>
                <p class="precio">Precio ${{ $curso->price }}</p>
                @if(in_array($curso->id, $carrito)) <!-- Verificar si el curso está en el carrito -->
                    <p>Ya tienes este curso en tu carrito.</p>
                @endif
                @if(in_array($curso->id, $cursosActivos)) <!-- Verificar si el curso está activo -->
                    <p>Ya cuentas con este curso activo.</p>
                @else
                    <!-- Formulario para añadir al carrito (sin AJAX) -->
                    <form class="addToCartForm" action="{{ route('add.to.cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $curso->id }}">
                        <button type="submit" class="agregar-al-carrito" {{ isset($cart[$curso->id]) ? 'disabled' : '' }}>
                            Añadir al carrito
                        </button>
                    </form>
                @endif
            </div>
        </a>
    @endforeach
    
        
    
           
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addToCartButtons = document.querySelectorAll('.agregar-al-carrito');
    
            addToCartButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    const form = button.closest('.addToCartForm');
                    const courseId = form.querySelector('input[name="course_id"]').value;
                    
                    // Verificar si el usuario ha iniciado sesión
                    @auth
                        // Si está autenticado, enviar el formulario
                        form.submit();
                    @else
                        // Si no está autenticado, redirigirlo a la página de inicio de sesión
                        window.location.href = "{{ route('login') }}";
                    @endauth
                });
            });
        });
    </script>
    


    </main>

    {{ $courses->links() }}


@endsection

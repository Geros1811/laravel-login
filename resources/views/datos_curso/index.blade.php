<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/indexCursos.css') }}">


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@extends('layouts.tienda')

@section('titulo', 'Cursos')

@section('contenido')



    <div class="titulo">
        <h1>
            ¡Aprende, Avanza, Triunfa!
        </h1>
        <p>
            Descubre Nuestros Cursos Ahora.
        </p>
    </div>

    <main class="card-containers">

        <!-- Muestra los cursos -->
        @foreach ($courses as $curso)
            <a href="{{ route('curso.detalle', ['id' => $curso->id]) }}" class="curso-link">
                <div class="curso-card">
                    <img src="data:image/jpeg;base64,{{ base64_encode($curso->ImgC) }}" alt="Imagen del curso">
                    <h1>{{ $curso->title }}</h1>
                    <p>Duración: {{ $curso->Duracion }}</p>
                    <h3><b>Capacitador:</b><br>{{ $curso->apep_cap }} {{ $curso->apem_cap }}</h3>
                    <p class="precio">Precio ${{ $curso->price }}</p>
                    <!-- Formulario para añadir al carrito (sin AJAX) -->
                <form class="addToCartForm"  action="{{ route('add.to.cart') }}" method="post">
                    @csrf
                    <input type="hidden" name="course_id" value="{{ $curso->id }}">
                    <button type="submit" class="agregar-al-carrito buttonM" {{ isset($cart[$curso->id]) ? 'disabled' : '' }}>
                        Añadir al carrito
                    </button>
                </form>
                </div>
                
            </div>  
            </a>
        @endforeach
        
    
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const addToCartButtons = document.querySelectorAll('.agregar-al-carrito');
        
                addToCartButtons.forEach(function(button) {
                    button.addEventListener('click', function(event) {
                        const form = button.closest('.addToCartForm');
        
                        @guest
                            event.preventDefault(); // Evita que el formulario se envíe
                            window.location.href = "{{ route('login') }}";
                        @endguest
                    });
                });
            });
        </script>
        
        

    </main>

    {{ $courses->links() }}


@endsection

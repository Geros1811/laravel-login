<link rel="stylesheet" href="{{ asset('css/login.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/contacto.css') }}"> --}}

<x-auth-session-status class="mb-4" :status="session('status')" />

@extends('layouts.loginPlantilla')

@section('tituloLogin', 'Registro e inicio de sesión')

@section('login')

    <!-- El contenido de la pagina -->
    <!-- Main -->
    <main class="contenidoLog">
        <!-- Para iniciar sesion -->
        <section class="loginCont login">
            <div class="informacion">
                <div class="infotexto">
                    <h2>Explore nuestra membresía y desarrolle sus habilidades para sobresalir en su campo profesional.</h2>
                    <p>¿No tiene una cuenta?</p>
                    <input type="button" value="Crear Cuenta" id="sing-in">
                </div>
            </div>
            <div class="formularioLoyCre">
                <div class="formularioContenido">
                    <h2>Iniciar sesión</h2>

                    <form class="FormCrear" method="POST" action="{{ route('login') }}">
                        @csrf
                            {{-- <form class="FormCrear"> --}}
                        
                            <label for="email" :value="__('Email')">
                                <i class='bx bx-envelope'></i>
                                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Correo electrónico">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </label>

                            <label for="password" :value="__('Password')" >
                                <i class='bx bx-lock-alt'></i>
                                <input id="password" type="password" 
                                    name="password"
                                    required autocomplete="current-password" 
                                    placeholder="Contraseña">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </label>
                            <a href="home">
                                <input value="Iniciar sesión" type="submit" />
                            </a>

                    </form>
                </div>
            </div>
        </section>
        <!-- Para crear cuenta -->
        <section class="loginCont hide registrar">
            <div class="informacion">
                <div class="infotexto">
                    <h2>Explore nuestra membresía y desarrolle sus habilidades para sobresalir en su campo profesional.</h2>
                    <p>¿Ya tiene una cuenta?</p>
                    <input type="button" value="Iniciar sesión" id="sing-up">
                </div>
            </div>
            <div class="formularioLoyCre">
                <div class="formularioContenido">
                    <h2>Crear una cuenta</h2>

                    <form class="FormCrear"method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="nombreApellidos">
                            <label for="name" :value="__('Name')">
                                <i class='bx bx-user-pin'></i>
                                <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nombre">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </label>    
                            {{-- <label for="Apellido-Paterno" :value="__('Apellido-Paterno')">
                                <i class='bx bx-user-pin'></i>
                                <input id="name" type="text" name="name" :value="old('Apellido-Paterno')" required autofocus autocomplete="name" placeholder="Nombre">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </label>    
                            <label for="Apellido-Materno" :value="__('Apellido-Materno')">
                                <i class='bx bx-user-pin'></i>
                                <input id="name" type="text" name="name" :value="old('Apellido-Materno')" required autofocus autocomplete="name" placeholder="Nombre">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </label>     --}}
                            {{-- <label>
                                <i class='bx bx-user-pin'></i>
                                <input type="text" placeholder="Apellido Paterno">
                            </label>
                            <label>
                                <i class='bx bx-user-pin'></i>
                                <input type="text" placeholder="Apellido Materno">
                            </label> --}}
                            <label for="email" :value="__('Email')" >
                                <i class='bx bx-envelope'></i>
                                <input id="email" type="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Correo electrónico">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </label>
                            <label for="password" :value="__('Password')" >
                                <i class='bx bx-lock-alt'></i>
                                <input id="password" 
                                type="password"
                                name="password"
                                required autocomplete="new-password" placeholder="Contraseña">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </label>
                            <label for="password_confirmation" :value="__('Confirm Password')" >
                                <i class='bx bx-lock-alt'></i>
                                <input id="password_confirmation"
                                type="password" 
                                name="password_confirmation" required autocomplete="new-password" 
                                placeholder="Confirmar Contraseña">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </label>
                        </div>



                        <input value="Registrarse" type="submit">

                    </form>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('js/formulario.js') }}"></script>
    {{-- <script src="{{ asset('js/carousel.js') }}"></script> --}}
@endsection

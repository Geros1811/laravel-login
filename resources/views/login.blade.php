<link rel="stylesheet" href="{{ asset('css/login.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/contacto.css') }}"> --}}


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

                    <form class="FormCrear">

                        <label>
                            <i class='bx bx-envelope'></i>
                            <input type="email" placeholder="Correo electrónico">
                        </label>

                        <label>
                            <!-- Contraseña normal  -->
                            <i class='bx bx-lock-alt'></i>
                            <!-- para  que se muestre la contraseña -->
                            <!-- <i class='bx bx-lock-open-alt' ></i> -->
                            <input type="password" placeholder="Contraseña">
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

                    <form class="FormCrear">
                        <div class="nombreApellidos">
                            <label>
                                <i class='bx bx-user-pin'></i>
                                <input type="text" placeholder="Nombre">
                            </label>
                            <label>
                                <i class='bx bx-user-pin'></i>
                                <input type="text" placeholder="Apellido Paterno">
                            </label>
                            <label>
                                <i class='bx bx-user-pin'></i>
                                <input type="text" placeholder="Apellido Materno">
                            </label>

                            <label>
                                <i class='bx bx-envelope'></i>
                                <input type="email" placeholder="Correo electrónico">
                            </label>

                            <label>
                                <!-- Contraseña normal  -->
                                <i class='bx bx-lock-alt'></i>
                                <!-- para  que se muestre la contraseña -->
                                <!-- <i class='bx bx-lock-open-alt' ></i> -->
                                <input type="password" placeholder="Contraseña">
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

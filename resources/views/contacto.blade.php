{{-- <link rel="stylesheet" href="{{  asset('css/login.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('css/contacto.css') }}">


@extends('layouts.layout')

@section('titulo', 'Contacto')

@section('contenido')

    <!-- Main -->
    <main>

        <!-- Texto reutilizado  para el contenido de contacto XD -->
        <section class="Nosotros">
            <h1>¿Necesitas Contactarnos?</h1>
            <p>A continuación entrontras los medios en los cuales te podras comunicar con nosotros. <br> Asi como
                tambien las preguntas frecuentesque posiblemente puedas tener.</p>
        </section>

        <!-- Cards -->
        <section class="card-containerCont">
            <div class="cardcc">
                <span id="circulo">
                    <svg aria-hidden="true" class="e-font-icon-svg e-fab-whatsapp" viewBox="0 0 448 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                        </path>
                    </svg>
                </span>

                <h3>

                    <span class="size">
                        Whatsapp

                    </span>

                </h3>
                <br>
                <p>+52 55 6338 6068</p>

            </div>

            <div class="cardcc">
                <span id="circulo">
                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-envelope" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                        </path>
                    </svg>
                </span>

                <h3>
                    <span class="size">
                        Escribenos a


                    </span>

                </h3>
                <p>asesoria@sar-solutions.com</p>

            </div>

            <div class="cardcc">
                <span id="circulo">
                    <svg aria-hidden="true" class="e-font-icon-svg e-fab-facebook-messenger" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M256.55 8C116.52 8 8 110.34 8 248.57c0 72.3 29.71 134.78 78.07 177.94 8.35 7.51 6.63 11.86 8.05 58.23A19.92 19.92 0 0 0 122 502.31c52.91-23.3 53.59-25.14 62.56-22.7C337.85 521.8 504 423.7 504 248.57 504 110.34 396.59 8 256.55 8zm149.24 185.13l-73 115.57a37.37 37.37 0 0 1-53.91 9.93l-58.08-43.47a15 15 0 0 0-18 0l-78.37 59.44c-10.46 7.93-24.16-4.6-17.11-15.67l73-115.57a37.36 37.36 0 0 1 53.91-9.93l58.06 43.46a15 15 0 0 0 18 0l78.41-59.38c10.44-7.98 24.14 4.54 17.09 15.62z">
                        </path>
                    </svg>
                </span>

                <h3>
                    <span class="size">
                        Saludanos en


                    </span>
                </h3>
                <br>
                <p>Messenger FB </p>

            </div>
        </section>

        <!-- separador -->
        <div class="sep">
            <h1>Preguntas Frecuentes</h1>
        </div>

        <!--  Aquí va el código del acordeón -->
        <section class="acordeon">
            <!-- Acordeon 1 -->
            <div class="acordeon-item">
                <div class="acordeon-title">
                    <span class="accordeon-icon plus">
                        <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                            </path>

                        </svg>
                    </span>
                    <span class="accordeon-icon minus">
                        <svg class="e-font-icon-svg " viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                            </path>
                        </svg>
                    </span>
                    <p id="T">
                        Como comprar uno de sus cursos?
                    </p>
                </div>
                <div class="acordeon-content">
                    <ul>
                        <li>Registrarse -> <a href="#">Aqui</a> </li>
                        <li>Seleccionar los cursos que deseas</li>
                        <li>Realizar el pago</li>
                        <li>Listo tus cursos te estarán esperando</li>
                    </ul>
                </div>
            </div>
            <!-- Acordeon 2 -->
            <div class="acordeon-item">
                <div class="acordeon-title">
                    <span class="accordeon-icon plus">
                        <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                            </path>

                        </svg>
                    </span>
                    <span class="accordeon-icon minus">
                        <svg class="e-font-icon-svg " viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                            </path>
                        </svg>
                    </span>
                    <p id="T">Termine mi curso ¿Como obtengo mi DC 3?</p>

                </div>
                <div class="acordeon-content">
                    <p>Todos tus cursos terminados te darán el derecho a estar en el padrón de estudiantes
                        certificado
                        en donde aparecerán las competencias caso obtenido los botones o links para descargar tus
                        diplomas y DC3
                        <br>
                        <br>
                        VISITAR PADRON DE ESTUDIANTES <a href="">CLICK AQUI</a>
                    </p>
                </div>
            </div>
            <!-- Acordeon 3 -->
            <div class="acordeon-item">
                <div class="acordeon-title">
                    <span class="accordeon-icon plus">
                        <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                            </path>

                        </svg>
                    </span>
                    <span class="accordeon-icon minus">
                        <svg class="e-font-icon-svg " viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                            </path>
                        </svg>
                    </span>
                    <p id="T">No puedo iniciar sesion y/o olvide mi contraseña</p>
                </div>
                <div class="acordeon-content">
                    <p>Nos actualizamos y por seguridad, el sistema nos solicita tener que restablecer nuestra
                        contraseña. Así que si no puedes entrar, no te preocupes, sólo es cuestión de que
                        restablezcas tu contraseña.

                        <br><br>
                        Si también no te llegan a aparecer tus cursos ponte en contacto con nosotros para volverte a
                        enrollar.
                    </p>
                </div>
            </div>
            <!-- Acordeon 4 -->
            <div class="acordeon-item">
                <div class="acordeon-title">
                    <span class="accordeon-icon plus">
                        <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                            </path>

                        </svg>
                    </span>
                    <span class="accordeon-icon minus">
                        <svg class="e-font-icon-svg " viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                            </path>
                        </svg>
                    </span>
                    <p id="T">Tengo dudas de la plataforma</p>

                </div>
                <div class="acordeon-content">
                    <p>Cualquier duda que tengas acerca del sistema nos puedes contactar mediante Messenger en nuestra
                        página oficial de FB SAR Solutions</p>
                </div>
            </div>

        </section>

        <!-- separador -->
        <div class="sep">
            <h1>Envianos un mensaje</h1>
        </div>

        <!--     Formulario para solicitar ayuda -->
        <section class="formulariox">
            <form class="formx">

                <div class="flex">
                    <label>
                        <input required="" placeholder="" type="text" class="input">
                        <span>Nombre</span>
                    </label>

                    <label>
                        <input required="" placeholder="" type="text" class="input">
                        <span>Apellidos</span>
                    </label>
                </div>

                <label>
                    <input required="" placeholder="" type="email" class="input">
                    <span>email</span>
                </label>

                <label>
                    <textarea required="" rows="3" placeholder="" class="input01"></textarea>
                    <span>Mensaje</span>
                </label>

                <button class="fancy" href="#">
                    <span class="top-key"></span>
                    <span class="text">Enviar</span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                </button>
            </form>
        </section>

    </main>
@endsection

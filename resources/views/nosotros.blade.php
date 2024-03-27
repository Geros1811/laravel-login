{{-- <link rel="stylesheet" href="{{  asset('css/login.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('css/contacto.css') }}">


@extends('layouts.layout')

@section('titulo', 'Nosotros')

@section('contenido')

    <!-- El contenido de la pagina -->

    <main>
        <section class="Nosotros">
            <h1>Nosotros</h1>
            <p>Una empresa 100% Mexicana que se dedica a la capacitación en temas de <br>
                calidad, administración y mejora continua.</p>
        </section>

        <section class="imgText">
            <!-- Imágenes izquierda -->
            <div class="ContImag">
                <div class="imgCol1">
                    <figure class="imgs1">
                        <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/12/mision-211x300-1.jpeg" alt=""
                            srcset="">
                        <figcaption>Misión</figcaption>
                    </figure>
                </div>
                <div class="imgCol2">
                    <figure class="imgs2">
                        <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/12/vision-300x300-1.jpeg" alt=""
                            srcset="">
                        <figcaption>Visión</figcaption>
                    </figure>
                </div>
            </div>
            <!-- Texto derecha -->
            <div class="ContTexto">
                <div class="textoCol">
                    <h2>Misión</h2>
                    <p>Proveer servicios de capacitación, asesoría y asistencia técnica en materia de Sistemas
                        Cognitivos, SAP, Oracle y plataformas web con la finalidad de apoyar a la mejora y optimización
                        de procesos las organizaciones

                    </p>
                </div>
                <div class="textoCol">
                    <h2>Vision</h2>
                    <p>Ser la empresa líder en materia de capacitación, asesoría y asistencia técnica en materia de
                        Sistemas Cognitivos, SAP, Oracle, a nivel nacional, generando confianza en nuestros clientes,
                        ofreciendo precios competitivos en el mercado e impulsando el crecimiento económico y técnico de
                        la Industria Mexicana.</p>
                </div>
            </div>
        </section>

        <div class="divtext">
            <h1>Numeros SAR</h1>
        </div>

        <section class="SarNum">
            <!-- categoria 1  -->
            <div class="icon-cardNum">
                <h3>100+</h3>
                <p>Cursos</p>
            </div>

            <!-- Categoria 2 -->
            <div class="icon-cardNum">
                <h3>3+</h3>
                <p>paises</p>
            </div>

            <!-- Categoria 3 -->
            <div class="icon-cardNum">
                <h3>12+</h3>
                <p>Socios Comerciales</p>
            </div>

            <!-- Categoria 3 -->
            <div class="icon-cardNum">
                <h3>7k+</h3>
                <p>Estudiantes</p>
            </div>

        </section>

        <section class="mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.2583855290636!2d-99.27660252530013!3d19.357961543061265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d200ca36d54c47%3A0x7f251bcd15c8a819!2sSAR%20Solutions%20Tecnolog%C3%ADa%20e%20Innovaci%C3%B3n!5e0!3m2!1ses-419!2smx!4v1692894668734!5m2!1ses-419!2smx"
                width="1115" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>

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

    {{-- <script src="{{ asset('js/carousel.js') }}"></script> --}}
@endsection

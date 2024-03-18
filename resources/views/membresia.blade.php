{{-- <link rel="stylesheet" href="{{  asset('css/login.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('css/contacto.css') }}"> --}}


@extends('layouts.layout')

@section('titulo', 'Membresia')

@section('contenido')

    <!-- El contenido de la pagina -->



    <main>

        <!-- Separador  -->
        <div class="titulo">
            <h1>
                Adquiere una membresia
            </h1>
        </div>

        <!-- Section banner -->
        <section class="banners">
            <div class="left-content">
                <div class="dual-images-container">
                    <div class="row">
                        <img class="izquierdaArriba1"
                            src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/moodle-1.webp" alt="Imagen 2">
                        <img class="izquierdaArriba2"
                            src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/persona.webp" alt="Imagen 4">
                    </div>
                    <div class="row">
                        <img class="izquierdaAbajo1"
                            src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/membresar3img-300x300-1.webp"
                            alt="Imagen 1">
                        <img class="izquierdaAbajo2"
                            src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/stripe-1.webp" alt="Imagen 3">
                    </div>
                </div>
            </div>
            <div class="right-contentc">
                <h1 style="font-size: 40px; margin-bottom: 100px; color: #275D90;">Por $290</h1>
                <p>Se un Socios SAR y accede a +100 <br><br>
                    Cursos especializados.</p>

                <a href="https://buy.stripe.com/aEUcO69CMcFG5RCaEF" style="margin-top: 15px; margin-right: -160px; "
                    class="info-buttons">Adquirir Membresia</a>

            </div>
        </section>

        <!-- Cursos agrupados -->

        <section>


            <div class="titulo">
                <h1>
                    Cursos de la Membresia
                </h1>
                <p>
                    Los cursos estan agrupados en categorias y son las siguientes
                </p>
            </div>

            <div class="select-group">
                <div class="select-item">
                    <a href="{{ route('Iso') }}">
                        <p>ISO</p>
                    </a>
                </div>
                <div class="select-item">
                    <a href="{{ route('Sap') }}">
                        <p>SAP</p>
                    </a>
                </div>
                <div class="select-item">
                    <a href="{{ route('HSE') }}">
                        <p>HSE</p>
                    </a>
                </div>
                <div class="select-item">
                    <a href="{{ route('Excel') }}">
                        <p>Excel</p>
                    </a>
                </div>
                <div class="select-item">
                    <a href="{{ route('Office') }}">
                        <p>Office</p>
                    </a>
                </div>
                <div class="select-item">
                    <a href="{{ route('Calidad') }}">
                        <p>Calidad</p>
                    </a>
                </div>
                <div class="select-item">
                    <a href="{{ route('Logistica') }}">
                        <p>Logistica</p>
                    </a>
                </div>
                <div class="select-item">
                    <a href="{{ route('Ingeneria') }}">
                        <p>Ingeneria</p>
                    </a>
                </div>
                <div class="select-item">
                    <a href="{{ route('Ambiental') }}">
                        <p>Ambiental</p>
                    </a>
                </div>
                <div class="select-item">
                    <a href="{{ route('Six_sigma') }}">
                        <p>SIX SIGMA</p>
                    </a>
                </div>
                <div class="select-item">
                    <a href="{{ route('Administracion') }}">
                        <p>Administración</p>
                    </a>
                </div>
                <div class="select-item">
                    <a href="{{ route('Inocuidad') }}">
                        <p>Inocuidad</p>
                    </a>
                </div>
            </div>
        </section>

        <br> <br>

        <!-- seccion video -->
        <section class="videoText">

            <div class="text-container">
                <h3>TODOS LOS</h3>
                <br>
                <h1> Cursos ​contienen</h1>
                <h1 class="changing-text" style="color: #54595f;"></h1>
                <p>Tienen archivos para descargar , normas para consultar , manuales gratuitos <br> y de soporte ,
                    practicas
                    y evaluaciones</p>
            </div>
            <div class="video-container">
                <iframe class="video" src="https://www.youtube.com/embed/JsnH2rrJJlY" frameborder="0"
                    allowfullscreen></iframe>
            </div>

        </section>

        <!-- Seccion imagen cards -->
        <div class="titulo">
            <h1 style="color: #0274be; font-family:'Poppins', Sans-serif ;">
                Beneficios
            </h1>
        </div>

        <section class="section-container">


            <div class="cards-container">
                <!--  -->
                <div class="cardg">
                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-file-invoice-dollar" viewBox="0 0 384 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9zm-153 31V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zM64 72c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8V72zm0 80v-16c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8zm144 263.88V440c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-24.29c-11.29-.58-22.27-4.52-31.37-11.35-3.9-2.93-4.1-8.77-.57-12.14l11.75-11.21c2.77-2.64 6.89-2.76 10.13-.73 3.87 2.42 8.26 3.72 12.82 3.72h28.11c6.5 0 11.8-5.92 11.8-13.19 0-5.95-3.61-11.19-8.77-12.73l-45-13.5c-18.59-5.58-31.58-23.42-31.58-43.39 0-24.52 19.05-44.44 42.67-45.07V232c0-4.42 3.58-8 8-8h16c4.42 0 8 3.58 8 8v24.29c11.29.58 22.27 4.51 31.37 11.35 3.9 2.93 4.1 8.77.57 12.14l-11.75 11.21c-2.77 2.64-6.89 2.76-10.13.73-3.87-2.43-8.26-3.72-12.82-3.72h-28.11c-6.5 0-11.8 5.92-11.8 13.19 0 5.95 3.61 11.19 8.77 12.73l45 13.5c18.59 5.58 31.58 23.42 31.58 43.39 0 24.53-19.05 44.44-42.67 45.07z">
                        </path>
                    </svg>
                    <h2>Facturación</h2>
                    <p>Facturamos mes con mes el pago de tu membresia.</p>
                </div>
                <!--  -->
                <div class="cardg">
                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-user-tie" viewBox="0 0 448 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm95.8 32.6L272 480l-32-136 32-56h-96l32 56-32 136-47.8-191.4C56.9 292 0 350.3 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-72.1-56.9-130.4-128.2-133.8z">
                        </path>
                    </svg>
                    <h2>Soporte</h2>
                    <p>Nuestros ejecutivos estan disponibles 24/7 para cualquier duda o aclaración.</p>
                </div>
            </div>
            <img class="center-imageg" src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/mujerrubia.webp"
                alt="Imagen Central">
            <div class="cards-container">
                <!--  -->
                <div class="cardg">
                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-graduation-cap" viewBox="0 0 640 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M622.34 153.2L343.4 67.5c-15.2-4.67-31.6-4.67-46.79 0L17.66 153.2c-23.54 7.23-23.54 38.36 0 45.59l48.63 14.94c-10.67 13.19-17.23 29.28-17.88 46.9C38.78 266.15 32 276.11 32 288c0 10.78 5.68 19.85 13.86 25.65L20.33 428.53C18.11 438.52 25.71 448 35.94 448h56.11c10.24 0 17.84-9.48 15.62-19.47L82.14 313.65C90.32 307.85 96 298.78 96 288c0-11.57-6.47-21.25-15.66-26.87.76-15.02 8.44-28.3 20.69-36.72L296.6 284.5c9.06 2.78 26.44 6.25 46.79 0l278.95-85.7c23.55-7.24 23.55-38.36 0-45.6zM352.79 315.09c-28.53 8.76-52.84 3.92-65.59 0l-145.02-44.55L128 384c0 35.35 85.96 64 192 64s192-28.65 192-64l-14.18-113.47-145.03 44.56z">
                        </path>
                    </svg>
                    <h2>Certificación</h2>
                    <p>Al terminar quedas registrado en nuestro padron de estudiantes</p>
                </div>
                <!--  -->
                <div class="cardg">
                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-clock" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z">
                        </path>
                    </svg>
                    <h2>Horarios</h2>
                    <p>Realiza tus cursos a tus tiempos y horarios , no hay limite para terminarlos</p>
                </div>
            </div>
        </section>

        <section class="premium-section">
            <div class="container">
                <div class="price-plan">
                    <div class="header">
                        <h3 class="plan-name">Membresia SAR</h3>
                        <p class="subtitle">El VIP de la capacitación</p>
                    </div>
                    <p class="pricePlan">$29.99/ <b>mes</b> </p>
                    <ul class="features">
                        <li>
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                </path>
                            </svg>
                            Acceso a todos nuestros cursos
                        </li>
                        <li>
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                </path>
                            </svg>
                            Capacitate a tus tiempos
                        </li>
                        <li>
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                </path>
                            </svg>
                            Certificados en físico
                        </li>
                        <li>
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                </path>
                            </svg>

                            + de 100 cursos
                        </li>
                        <li>
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                </path>
                            </svg>

                            App movil
                        </li>
                    </ul>
                    <a href="#" class="buy-button">
                        Adquirir Membresía </a>
                </div>
            </div>
        </section>

        <!-- imagenes -->

        <div class="imagenes-grandess">
            <div class="imagen-container">
                <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/stps2a11_Cimg_65852.webp"
                    alt="Imagen 2">
                <div class="contenido-textoa">
                    <p>En caso de aprobar tu evaluación también se te genera DC3 , avalada por STPS</p>
                </div>
            </div>
            <div class="imagen-container">
                <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/Diplomaweb.png" alt="Imagen 1">
                <div class="contenido-textoa">
                    <p>Al terminar cada curso se te entrega un diploma certificado como este</p>
                </div>
            </div>
            <div class="contenido-textoa">
                <h2>Diplomas & DC3</h2>
            </div>
        </div>

        <br>
        <br>

        <!-- socios -->
        <div class="titulo">
            <h1 style="color: #0274be;">
                Nuestros Clientes
            </h1>
            <p style="color: #324A6D; font-size: 16px;">
                Estos son algunas compañías que toman nuestros cursos
            </p>
        </div>

        <section class="seccion-imagenes">
            <div class="tarjeta">
                <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/logocontinentala-1.png" alt="Imagen 1">
            </div>
            <div class="tarjeta">
                <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/jaguarlogo.png" alt="Imagen 2">
            </div>
            <div class="tarjeta">
                <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/LOGOBIMBOG.png" alt="Imagen 3">
            </div>
            <div class="tarjeta">
                <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/CONDUMEX.png" alt="Imagen 4">
            </div>
            <div class="tarjeta">
                <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/LOGOQUACKER-1.png" alt="Imagen 5">
            </div>
        </section>

        <section class="seccion-texto-tarjetas">
            <div class="contenedor-texto">
                <h3>Algunos Numeros</h3>
            </div>
            <div class="tarjetaC">
                <span>+100</span>
                <p>CURSOS</p>
            </div>
            <div class="tarjetaC">
                <span>74k</span>
                <p>ON DEMAND</p>
            </div>
            <div class="tarjetaC">
                <span>+6k</span>
                <p>MIEMBROS</p>
            </div>
        </section>

        <div class="titulo">
            <h1 style="color: #0274be;">
                Versatilidad
            </h1>
            <p style="color: #324A6D; font-size: 16px;">
                Toma tus cursos desde cualquier dispositivo con la app de MOODLE
            </p>
        </div>

        <!-- IMG XD -->
        <section class="sec">
            <img src="{{ asset('img/cursos/pantalla.png') }}" alt="" id="imagenes">
        </section>



        <div class="titulo">
            <h1 style="color: #0274be;">
                Se miembro SAR
            </h1>
            <p style="color: #324A6D; font-size: 16px; font-family: 'Poppins', Sans-serif;">
                Unete , capacitate y se parte de la comunidad SAR
            </p>

            <br>

            <p style="color: #324A6D; font-size: 16px; font-family: 'Poppins', Sans-serif;">
                TÉRMINOS Y CONDICIONES
                <br>
                -Liberación del DC3 con una permanencia mínima de 3 meses.
                <br>
                -Cancela 3 días antes de tu mensualidad para no generar un nuevo cargo
            </p>

        </div>

        <div style="text-align: center; margin:15px;">
            <button class="button registrarme">Adquirir Membresia</button>

        </div>

    </main>
    {{-- <script src="{{ asset('js/carousel.js') }}"></script> --}}
@endsection

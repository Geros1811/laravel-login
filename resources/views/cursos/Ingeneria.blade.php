{{-- <link rel="stylesheet" href="{{  asset('css/login.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('css/contacto.css') }}"> --}}


@extends('layouts.layout')

@section('titulo', 'Categoria Ingeneria')

@section('contenido')

    <!-- El contenido de la pagina -->

    <main>
        <!-- Baner -->
        <section class="bannerd">
            <div class="banner-contentd">
                <h1>PROMOCIÓN</h1>
                <p>CATEGORÍA <br> ISO</p>
                <h2>POR $1,490.00</h2>
            </div>
        </section>

        <!-- Boton -->
        <section class="centered-section">
            <button class="Btn">
                <p>Adquirir Cursos</p>
                <svg aria-hidden="true" class="e-font-icon-svg e-fas-shopping-cart" viewBox="0 0 576 512"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z">
                    </path>
                </svg>
            </button>
        </section>

        <!-- Separador Gratis -->

        <div class="separadorz">
            <h1>Categoría ISO</h1>
            <h3>Los cursos que la integran son:</h3>
        </div>

        <!-- Carousel -->
        <section class="carousel-container">
            <div class="carousel">

                <!-- Curso  1 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/Diapositiva31-2-300x300.jpg" alt="Curso Imagen">
                    </a>

                    <div class="card-content">
                        <h3 style="text-align: center; color: #275d90 ;">General</h3>
                        <br>
                        <h2>ISO 9001-2015 Sistemas de gestion de la calidad</h2>

                        <p class="price" style="text-align: center; color: #275d90 ;">$580.00</p>
                        <div class="cenBot">

                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
                <!-- Curso  2 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/Diapositiva51-300x300.jpg" alt="Curso Imagen">
                    </a>

                    <div class="card-content">
                        <h3 style="text-align: center; color: #275d90 ;">General</h3>

                        <h2>ISO 45001-2018 Sistemas de gestión de la inocuidad de la salud y seguridad en el trabajo</h2>

                        <p class="price" style="text-align: center; color: #275d90 ;">$580.00</p>
                        <div class="cenBot">

                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
                <!-- Curso  3 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/Diapositiva34-300x300.jpg" alt="Curso Imagen">
                    </a>
                    <br>
                    <div class="card-content">
                        <h3 style="text-align: center; color: #275d90 ;">General</h3>
                        <br>
                        <h2>ISO 37001:2018 Sistemas de Gestión Antisoborno</h2>
                        <br>
                        <p class="price" style="text-align: center; color: #275d90 ;">$290.00</p>
                        <div class="cenBot">

                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
                <!-- Curso 4 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/Diapositiva33-300x300.jpg" alt="Curso Imagen">
                    </a>
                    <br>
                    <div class="card-content">
                        <h3 style="text-align: center; color: #275d90 ;">General</h3>
                        <br>
                        <h2>ISO 31000:2018 Gestión de Riesgos</h2>
                        <br>
                        <p class="price" style="text-align: center; color: #275d90 ;">$290.00</p>
                        <div class="cenBot">

                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
                <!-- Curso 5 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/Diapositiva74-300x300.jpg" alt="Curso Imagen">
                    </a>

                    <div class="card-content">
                        <h3 style="text-align: center; color: #275d90 ;">General</h3>

                        <h2>ISO 28000:2007 Sistema de Gestión para la Cadena de Suministro</h2>

                        <p class="price" style="text-align: center; color: #275d90 ;">$290.00</p>
                        <div class="cenBot">

                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
                <!-- Curso 6 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/Diapositiva13-300x300.jpg" alt="Curso Imagen">
                    </a>

                    <div class="card-content">
                        <h3 style="text-align: center; color: #275d90 ;">Inocuidad</h3>

                        <h2>ISO 22000:2018 Sistemas de gestión de la inocuidad de los alimentos</h2>

                        <p class="price" style="text-align: center; color: #275d90 ;">$290.00</p>
                        <div class="cenBot">

                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
                <!-- Curso 7 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/Diapositiva63-300x300.jpg" alt="Curso Imagen">
                    </a>

                    <div class="card-content">
                        <h3 style="text-align: center; color: #275d90 ;">General</h3>

                        <h2>ISO 19011:2018 Formación de Auditores Internos</h2>

                        <p class="price" style="text-align: center; color: #275d90 ;">$890.00</p>
                        <div class="cenBot">

                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
                <!-- Curso 8 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/Diapositiva10-300x300.jpg" alt="Curso Imagen">
                    </a>

                    <div class="card-content">
                        <h3 style="text-align: center; color: #275d90 ;">General</h3>

                        <h2>ISO 14001-2015 Sistema de Gestión Ambiental</h2>

                        <p class="price" style="text-align: center; color: #275d90 ;">$580.00</p>
                        <div class="cenBot">

                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="prev-button">&#10094;</button>
            <button class="next-button">&#10095;</button>
        </section>

        <!-- ///////////////////////////////////////////////////////////////////////// -->
        <div class="separadorz">
            <h1>Como me inscribo</h1>
        </div>

        <section class="contenedorT">
            <div class="circle-container">

            </div>

            <div class="seccionT">
                <div class="circle">1</div>

                <h1>Registro</h1>
                <p>Realiza tu registro aquí</p>
            </div>
            <div class="seccionT">
                <div class="circle">2</div>
                <h1>Pago</h1>
                <p>Después de realizar tu registro, puedes realizar el pago aquí en la página o bien consulta nuestros
                    métodos de pago</p>
            </div>
            <div class="seccionT">
                <div class="circle">3</div>
                <h1>Se Enrollan Tus Cursos</h1>
                <p>Mandas el comprobante de pago por este medio, te inscribimos a los cursos y listo! 🤓 Empezaras con
                    tu
                    capacitación. 😃</p>
            </div>
        </section>

        <!-- ///////////////////////////////////////////////////////////////////// -->
        <br>

        <br>
        <section class="tseccion">
            <h3>Al finalizar se</h3>
            <h1>SE OTORGA</h1>

            <br>

            <div class="imagenes-grandes">
                <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/WhatsApp-Image-2022-10-27-at-1.44.25-PM.jpeg"
                    alt="Imagen 1">
                <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/stps2a11_Cimg_65852.webp" alt="Imagen 2">
                <div class="contenido-texto">
                    <h1>LOS DIPLOMAS Y DC3</h1>
                    <p>
                        Se entregan por cada curso terminado.
                        <br>
                        Las DC3 están avaladas por STPS
                        <br>
                        NO tienen costo adicional.
                        <br>
                        Todos nuestros cursos incluyen

                    </p>

                    <h1>DC-3</h1>
                    <button class="Btn">Buscar Agente capacitador SAR</button>
                </div>
            </div>



            <div class="imagen-pequena">
                <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/1024px-STPS_Logo_2019.svg.webp"
                    alt="Imagen Pequeña">
                <p>Si gustas revisar nuestro registro ante STPS, nuestra razón social es: <br>
                    SAR SOLUTIONS TECNOLOGIA E INNOVACION, S.A. DE C.V</p>
            </div>
        </section>

        <!-- ////////////////////////// -->

        <section class="mi-seccion">
            <h2 class="h2">Información Adicional</h2>

            <div class="contenedor-mis-divs">
                <div class="mi-div">
                    <h1>Los cursos están alojados en una plataforma propia.
                        Es unico pago y en una sola exhibición</h1>
                </div>
                <div class="mi-div">
                    <h3>Nuestros Cursos</h3>
                    <p>-Cada curso tiene una duración aprox de 8 hrs y son vitalicios.
                        <br>
                        -Se inicia de manera inmediata, no hay horarios lo haces a tus tiempos
                    </p>
                </div>
                <div class="mi-div">
                    <h3>Pago</h3>
                    <p>-Tenemos diversos métodos de pago y son por transferencia, deposito ó pago en línea.
                        <br>
                        -El limite de pago es hasta agotar existencias
                    </p>
                </div>
            </div>
        </section>

        <!-- ////////////////////// -->

        <div class="separadora">
            <h2>Tus <b>Beneficios</b></h2>
            <h1> CONOCE TODO LO QUE TENEMOS <b>PARA TI</b></h1>
        </div>

        <!-- seccion categorias -->

        <section class="icon-section2">
            <!-- Categoria 1 -->
            <div class="icon-card">
                <svg aria-hidden="true" class="e-font-icon-svg e-fas-user-tie" viewBox="0 0 448 512"
                    xmlns="http://www.w3.org/2000/svg" fill="#275d90" width="50">
                    <path
                        d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm95.8 32.6L272 480l-32-136 32-56h-96l32 56-32 136-47.8-191.4C56.9 292 0 350.3 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-72.1-56.9-130.4-128.2-133.8z">
                    </path>
                </svg>
                <h3>ATENCIÓN PERSONALIZADA</h3>
                <p>Ejecutivos SAR al pendiente de tí.</p>
            </div>

            <!-- Categoria 2 -->
            <div class="icon-card">
                <svg aria-hidden="true" class="e-font-icon-svg e-fas-clock" viewBox="0 0 512 512"
                    xmlns="http://www.w3.org/2000/svg" fill="#275d90" width="50">
                    <path
                        d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z">
                    </path>
                </svg>
                <h3>A TUS TIEMPOS</h3>
                <p>Tu eliges en que momento.</p>
            </div>

            <!-- Categoria 3 -->
            <div class="icon-card">
                <svg aria-hidden="true" class="e-font-icon-svg e-fas-clock" viewBox="0 0 512 512"
                    xmlns="http://www.w3.org/2000/svg" fill="#275d90" width="50">
                    <path
                        d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z">
                    </path>
                </svg>
                <h3>FACTURA TUS CURSOS</h3>
                <p>Solicita tu CFDI Soloen Mexico.</p>
            </div>
        </section>


        <div class="separadora">
            <h1> QUE ESPERAS
                <b>INSCRIBETE!</b>
            </h1>
        </div>


        <!-- Baner inferior -->
        <section class="banner2">
            <button>Ver</button>
        </section>

    </main>
    <script src="{{ asset('js/carousel.js') }}"></script>
@endsection

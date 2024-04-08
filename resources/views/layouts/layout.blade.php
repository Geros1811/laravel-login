<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/ba69bf8ad0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@800&family=Raleway:wght@700&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/categorias.css') }}">

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/membresia.css') }}">
    <link rel="stylesheet" href="{{ asset('css/misCursos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cursos/inocuidad.css') }}">

    <link rel="icon" type="image/x-icon"
        href="https://sar-solutions.com.mx/wp-content/uploads/2023/11/logo-1-100x100.png">
    <title> @yield('titulo')</title>
</head>

<style>
  
</style>

<body>

    <!-- EL nav  -->
    <header>
        <nav class="navbar">
            <div class="logo-and-search">
                <div class="logo">
                    <a href="{{ asset('home') }}">
                        <img src="{{ asset('img/logosarlineal-dark-icono.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="search">
                    <form action="#">
                        <input type="text" name="q" placeholder="Buscar cursos">
                        <button type="submit"><span class="material-symbols-outlined">
                                search
                            </span></button>
                    </form>
                </div>
            </div>

            <div class="menu">
                <ul>
                    <li class="submenu">
                        <a href="{{ asset('home') }}">Inicio</a>
                        <div class="submenu-content">
                            <a href="{{ asset('nosotros') }}">Nosotros</a>
                            <a href="{{ asset('contacto') }}">Contacto</a>
                        </div>
                    </li>
                    <li class="submenu">
                        <a href="#">Cursos</a>
                        <div class="submenu-content">
                            <a href="{{ asset('obtener-cursos') }}">Tienda</a>
                        </div>
                    </li>
                </ul>

                <div class="button-container">
                    @if (!Auth::check())
                        <!-- Botón para registrarse -->
                        <button class="button registrarme" onclick="window.location='{{ route('login') }}'">
                            Registrarme
                        </button>
                    @else
                        <!-- Botón para acceder al perfil del usuario -->
                        <button class="acceder" onclick="">
                            <span class="material-icons iconn">account_circle</span>
                            <span class="button-text">{{ Auth::user()->name ?? '' }}</span>
                        </button>
                        <!-- Botón para cerrar sesión -->
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="button cerrar-sesion">Cerrar sesión</button>
                        </form>
                    @endif
                </div>
            </div>
        </nav>
    </header>

    <!-- Contenido principal -->
    <main>
        <div class="floating-button" id="toggleCartBtn"><i class='bx bxs-cart'></i></div>
    
        <div class="carrito-container" id="cartContainer" style="display: none;">
            <h2>Carrito</h2>
            <table>
                <thead>
                    <tr>
                        <th>Curso</th>
                        <th>Precio</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $totalCart = 0;
                    @endphp
                    @foreach (session('cart') ?? [] as $course_id => $course)
                        <tr>
                            <td>{{ $course['title'] }}</td>
                            <td>${{ $course['price'] }}</td>
                            <td>
                                <form action="{{ route('remove.from.cart') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="course_id" value="{{ $course_id }}">
                                    <button type="submit" class="eliminar-del-carrito">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @php
                        $totalCart += $course['price'];
                        @endphp
                    @endforeach
                    <tr>
                        <td colspan="2"><strong>Total</strong></td>
                        <td>${{ $totalCart }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        @yield('contenido')
    </main>

    <!-- EL footer -->
    <footer>
        <section class="footer">

            <div class="footer-sections">
                <div class="left-section">
                    <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/log1-150x150.png" alt="Logo">
                </div>
                <div class="center-section">
                    <p>capacitacion@sar-solutions.com <br> <br> +52 (55) 65-18-37-94</p>
                </div>
                <div class="center-section">
                    <p>Tienes preguntas, consulta nuestras preguntas frecuentes <br> <a href="#">AQUI</a></p>
                </div>
            </div>
        </section>
        <!-- Seccion de redes -->
        <section class="Redes">
            <div>
                <button class="BtnRe">
                    <span class="svgContainer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24">
                            <path
                                d="M9.19795 21.5H13.198V13.4901H16.8021L17.198 9.50977H13.198V7.5C13.198 6.94772 13.6457 6.5 14.198 6.5H17.198V2.5H14.198C11.4365 2.5 9.19795 4.73858 9.19795 7.5V9.50977H7.19795L6.80206 13.4901H9.19795V21.5Z">
                            </path>
                        </svg>
                    </span>
                    <span class="BG"></span>
                </button>

                <button class="Btntwit">
                    <span class="svgContainertwit">
                        <svg fill="white" class="svgIcontwit" xmlns="http://www.w3.org/2000/svg" height="1.7em"
                            viewBox="0 0 512 512">
                            <path
                                d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z">
                            </path>
                        </svg>
                    </span>
                    <span class="BGtwit"></span>
                </button>
            </div>
            <div>
                <button class="Btninsta">
                    <span class="svgContainerinsta">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512"
                            class="svgIconinsta" fill="white">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                            </path>
                        </svg>
                    </span>
                    <span class="BGinsta"></span>
                </button>

                <button class="Btnstock">
                    <span class="svgContainerstock">
                        <svg xmlns="http://www.w3.org/2000/svg" fill=" white" viewBox="0 0 448 512">
                            <path
                                d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z">
                            </path>
                        </svg>
                    </span>
                    <span class="BGstock"></span>
                </button>
            </div>

        </section>
        <!-- Seccion de copyright -->
        <section class="copy">
            <p>Copyright © 2023 SAR Solutions | Aviso de privacidad | Terminos y condiciones</p>
        </section>

    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // Muestra u oculta el carrito al hacer clic en el botón
            $('#toggleCartBtn').on('click', function() {
                $('#cartContainer').toggle();
            });
        });
    </script>
    
    <script src="{{ asset('js/acciones.js') }}"></script>


    {{-- <script src="{{ asset('js/mapa.js') }}"></script> --}}
    <script src="{{ asset('js/palabras.js') }}"></script>
</body>

</html>

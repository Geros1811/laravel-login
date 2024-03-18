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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/categorias.css">
    <link rel="stylesheet" href="css/indexMain.css">

    <link rel="icon" type="image/x-icon"
        href="https://sar-solutions.com.mx/wp-content/uploads/2023/11/logo-1-100x100.png">
    <title>SarSolutions</title>
</head>

<body>
    
    <!-- EL nav  -->
    <header>
        <nav class="navbar">
            <div class="logo-and-search">
                <div class="logo">
                    <img src="src/logosarlineal-dark-icono.png" alt="Logo" onclick="window.location.href='index.html'">
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
            <h1><a href="{{ route('vistalogin')}}">Login</a></h1>
            <div class="menu">
                <ul>
                    <li class="submenu">
                        <a href="#">Inicio</a>
                        <div class="submenu-content">
                            <a href="nosotros.html">Nosotros</a>
                            <a href="contacto.html">Contacto</a>
                        </div>
                    </li>
                    <li class="submenu">
                        <a href="#">Cursos</a>
                        <div class="submenu-content">
                            <a href="tienda.html">Tienda</a>
                        </div>
                    </li>
                </ul>


                <div class="button-container">
                    <button class="button registrarme" onclick="window.location='login.html'">
                        Registrarme
                    </button>

                    <button class="acceder" onclick="window.location.href='cursos.html'">
                        <span class="material-icons iconn">account_circle</span>
                        <span class="button-text">Acceder</span>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Contenido principal -->

    <main>

        <!-- Banner -->
        <section class="banner">
            <div class="banner-text">
                <h2>Cursos En Línea</h2>
                <p>Adquiera nuevas competencias y conocimientos con nuestros cursos en línea y conviértase en un
                    profesional de su campo.</p>
            </div>
        </section>


        <!-- cards  -->

        <section class="card-container">
            <div class="card">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0,0,256,256"
                    style="fill:#000000;">
                    <g fill="#275d90" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                        style="mix-blend-mode: normal">
                        <g transform="scale(5.12,5.12)">
                            <path
                                d="M10,3c-2.75,0 -5,2.25 -5,5v13.6875c-0.46875,-0.44141 -0.85547,-0.82031 -1.05078,-1.01562l-0.11328,-0.11719c-0.18359,-0.17187 -0.54687,-0.26562 -0.77734,-0.26562c-0.69141,0 -1.05859,0.35547 -1.05859,0.71094c0.00391,0.82422 0.3125,1.46094 0.38281,1.625c1.02344,2.49609 5.57031,7.33203 9.02344,8.625c-1.04687,2.09375 -1.04687,7.32031 -1.04687,7.32031c0,4.48438 3.36719,8.21094 7.96875,8.36719h1.49609c2.30078,-0.15625 4.14063,-1.99609 4.12891,-4.29687v-8.74609c0.42188,0.17969 1.19141,0.36328 2.09375,0.4375v8.46484c0,2.28516 1.85547,4.14063 4.14063,4.14063h1.58594c4.55859,0 7.86719,-3.69141 7.86719,-8.36719c0,0 0,-5.22656 -1.04687,-7.32031c3.17188,-1.32812 7.53125,-5.71484 8.96875,-8.35937c0.08984,-0.16406 0.4375,-1.07031 0.4375,-2.08984c0,-0.24609 -0.22266,-0.82422 -0.91797,-0.82422c-0.48437,0 -0.81641,0.42969 -0.81641,0.42969c-0.22656,0.22656 -0.67969,0.6875 -1.26562,1.23047v-13.63672c0,-2.75 -2.25,-5 -5,-5zM10,5h30c1.66797,0 3,1.33203 3,3v15.3125c-2.37109,1.81641 -5.76172,3.75391 -9.63672,3.75391h-4.62891c-1.51953,0 -2.6875,1.28906 -2.6875,2.69141v0.82422c-0.92187,-0.50781 -1.96484,-1.38672 -3.14062,-2.78125c0,0 -0.45703,-0.73437 -1.70312,-0.73437h-4.56641c-3.94922,0 -7.32422,-1.92187 -9.63672,-3.6875v-15.37891c0,-1.66797 1.33203,-3 3,-3zM17.5,14c-3.03906,0 -5.5,2.46094 -5.5,5.5c0,3.03906 2.46094,5.5 5.5,5.5c3.03906,0 5.5,-2.46094 5.5,-5.5c0,-3.03906 -2.46094,-5.5 -5.5,-5.5zM32.5,14c-3.03906,0 -5.5,2.46094 -5.5,5.5c0,3.03906 2.46094,5.5 5.5,5.5c3.03906,0 5.5,-2.46094 5.5,-5.5c0,-3.03906 -2.46094,-5.5 -5.5,-5.5z">
                            </path>
                        </g>
                    </g>
                </svg>
                <h3>

                    <span class="size">
                        Padrón de estudiantes

                    </span>

                </h3>
                <p>Consulta tus certificados</p>

                <button class="buttonM">Consultar</button>
            </div>

            <div class="card">

                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0,0,256,256"
                    style="fill:#000000;">
                    <g fill="#275d90" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                        style="mix-blend-mode: normal">
                        <g transform="scale(4,4)">
                            <path
                                d="M49.544,41.735c-2.933,0 -7.112,-1.593 -5.866,-7.821c0.978,-4.888 3.911,-5.866 5.866,-5.866c1.807,0 3.477,0.668 4.867,1.51c0.674,0.408 1.53,-0.074 1.5,-0.861l-0.424,-11.298c-0.042,-1.12 -1.015,-1.975 -2.131,-1.874l-10.697,0.97c-0.811,0.074 -1.369,-0.83 -0.91,-1.503c1.028,-1.505 1.928,-3.421 1.928,-5.519c0,-2.933 -1.681,-7.493 -7.821,-5.866c-4.819,1.277 -5.866,3.911 -5.866,5.866c0,2.173 0.964,4.149 2.036,5.676c0.477,0.68 -0.046,1.603 -0.874,1.536l-14.616,-1.171c-1.166,-0.093 -2.152,0.851 -2.11,2.019l0.274,7.622c0.027,0.743 -0.746,1.23 -1.415,0.907c-1.154,-0.558 -2.45,-0.947 -3.827,-0.947c-2.933,0 -7.493,1.681 -5.866,7.821c1.277,4.819 3.911,5.866 5.866,5.866c1.435,0 2.784,-0.422 3.975,-1.018c0.667,-0.334 1.447,0.151 1.424,0.896l-0.457,14.984c-0.03,1 0.698,1.861 1.689,1.997l7.061,0.879c0.796,0.109 1.385,-0.739 0.987,-1.438c-0.757,-1.328 -1.333,-2.89 -1.333,-4.569c0,-2.933 0.897,-5.866 6.844,-5.866c4.888,0 6.844,2.933 6.844,5.866c0,1.848 -0.698,3.552 -1.567,4.96c-0.413,0.67 0.063,1.528 0.85,1.505l17.799,-0.545c1.032,-0.031 1.862,-0.858 1.896,-1.89l0.449,-13.488c0.026,-0.785 -0.828,-1.265 -1.5,-0.857c-1.39,0.847 -3.064,1.517 -4.875,1.517z">
                            </path>
                        </g>
                    </g>
                </svg>
                <h3>
                    <span class="size">
                        Realizar mi Registro

                    </span>

                </h3>
                <p>Haz tu registro y capacitate</p>
                <button class="buttonM">Registrate</button>

            </div>

            <div class="card">
                <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABpElEQVR4nO2YsUoDQRCGB4Odiq1YiODtxDSCtr6BlUUKvZ0IFrYWPkBsLcyMIY2ND5BWSztRQUQsxdbWUsFCjZycBCTmLhePvQ3zw/TzMf/+swyg5Qsk6RSj+MbY5jxkEVr5cA/QLWP52ZCsDgViSB7KYWMGHKhSbU0gydl3L5bfkGRzqIm4hIFqu4Qkrdhmn0i8P5S1nMIAAIay+9OXIT5Z2Tkez/xGXMMENVk3ll/j6ZzPbfF05sfuHMY2l5D4KZ7M4+KGBJlTyzlM7XAWLd8lJlqa+HUNU0mTaGn3iGsYSEq0QRaicxjok2iDbvYiwAS9Eq1oXxTM9q25HQkQJOlkBoF6fQwKIIz7VxDQifyvUK1F+thzEaq1SK2Vi1CtRWqtXIRqLVJr5SJUa5FaKxehWosKai1j5Wokjg9BdCSOL95eg0Qqh41lQ/LiPUikIGysIfG79yCRkGRvJEAidU/3noNAtV0ylk/9BwEA3D6YROJ770EiJcWyNyBJsewVSL9Y9g7kr1j2EqRXLHsLAilj2VXBIFoIj6YM8bXrpn+XIb78AgxQHihLKb0UAAAAAElFTkSuQmCC">

                <h3>
                    <span class="size">
                        Preguntas Frencuentes

                    </span>
                </h3>
                <p>¿Tienes dudas? foro FAQ </p>
                <button class="buttonM">Ir</button>

            </div>
        </section>

        <!-- Separador -->
        <div class="separador">
            <h1>Cursos</h1>
        </div>

        <!-- Cursos carousel -->
        <section class="carousel-container">
            <div class="carousel">
                <!-- Curso 1 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="src/Cursos/Kpis.JPG" alt="Curso Imagen">
                    </a>
                    <div class="card-content">
                        <h3>General</h3>
                        <h2>KPI´s</h2>
                        <p class="price">$290.00</p>
                        <div class="students">
                            <p class="stars">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </p>
                            <p class="students-count">4323 Estudiantes</p>
                        </div>
                        <div class="cenBot">

                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
                <!-- Curso 2 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="src/Cursos/Scrum.JPG" alt="Curso Imagen">
                    </a>
                    <div class="card-content">
                        <h3>General</h3>
                        <h2>SCRUM</h2>
                        <p class="price">$290.00</p>
                        <div class="students">
                            <p class="stars">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </p>
                            <p class="students-count">3892 Estudiantes</p>
                        </div>
                        <div class="cenBot">

                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
                <!-- curso 3 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="src/Cursos/PMP.JPG" alt="Curso Imagen">
                    </a>
                    <div class="card-content">
                        <h3>General</h3>
                        <h2>Certificacion en PMP</h2>
                        <p class="price">$290.00</p>
                        <div class="students">
                            <p class="stars">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </p>
                            <p class="students-count">5562 Estudiantes</p>
                        </div>
                        <div class="cenBot">

                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
                <!-- curso 4 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="src/Cursos/Kaizen.JPG" alt="Curso Imagen">
                    </a>
                    <div class="card-content">
                        <h3>General</h3>
                        <h2>Kaizen - Mejora Continua</h2>
                        <p class="price">$290.00</p>
                        <div class="students">
                            <p class="stars">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </p>
                            <p class="students-count">6546 Estudiantes</p>
                        </div>
                        <div class="cenBot">

                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
                <!-- curso 5 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="src/Cursos/iso22.JPG" alt="Curso Imagen">
                    </a>
                    <div class="card-content">
                        <h3>General</h3>
                        <h2>ISO 9001-2015 Sistemas de gestion de calidad</h2>
                        <p class="price">$290.00</p>
                        <div class="students">
                            <p class="stars">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </p>
                            <p class="students-count">6172 Estudiantes</p>
                        </div>
                        <div class="cenBot">

                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
                <!-- curso 6 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="src/Cursos/IATF.JPG" alt="Curso Imagen">
                    </a>
                    <div class="card-content">
                        <h3>General</h3>
                        <h2>IATF 16949</h2>
                        <p class="price">$890.00</p>
                        <div class="students">
                            <p class="stars">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </p>
                            <p class="students-count">6500 Estudiantes</p>
                        </div>
                        <div class="cenBot">

                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
                <!-- curso 7 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="src/Cursos/Learn services.JPG" alt="Curso Imagen">
                    </a>
                    <div class="card-content">
                        <h3>General</h3>
                        <h2>Lean Service</h2>
                        <p class="price">$290.00</p>
                        <div class="students">
                            <p class="stars">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </p>
                            <p class="students-count">6253 Estudiantes</p>
                        </div>
                        <div class="cenBot">
                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
                <!-- curso 8 -->
                <div class="cardsCarousel">
                    <a href="#">
                        <img src="src/Cursos/VMS.JPG" alt="Curso Imagen">
                    </a>
                    <div class="card-content">
                        <h3>General</h3>
                        <h2>Value Stream Mapping</h2>
                        <p class="price">$290.00</p>
                        <div class="students">
                            <p class="stars">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </p>
                            <p class="students-count">5658 Estudiantes</p>
                        </div>

                        <div class="cenBot">

                            <button class="buttonM">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="prev-button">&#10094;</button>
            <button class="next-button">&#10095;</button>
        </section>


        <!--   Baner de mas informacion    -->

        <section class="custom-banner">

            <p class="top-left-text">No Pierdas La Oportunidad!</p>
            <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/8fb66531-group-200.png"
                alt="Imagen del banner" class="center-image">
            <img src="https://sar-solutions.com.mx/wp-content/uploads/2023/11/Picsart_23-10-27_14-11-28-953-300x200.png"
                alt="Imagen del banner" class="center-image">
            <div class="middle-content">
                <h2>Certificación <br> Del Conocer</h2>
            </div>
            <a href="#" class="info-button">Más información</a>
        </section>

        <!-- seccion categorias -->

        <section class="icon-section">
            <!-- categoria 1  -->
            <div class="icon-card">
                <a href="#">
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB2UlEQVR4nO2aS04CQRCGe+UNTDyA9J9wBKN7iWtXdGE8iUtxQxeJJxJNjIkudOEe1GuMmYQR0QyPMNNVDPUnFWBmgOqPenRP45zJZDKtIU/xAcRZUgvx5fByuO80CKkHP4Pw3r64PVADwCX+PjUQIATAU3wrHkXTAUIA8kF74lfxSIAQgPy5CggQBKACAoQBiEOAAgCiEKAEgBgESM4Dlpgnfk7mkEskhDhaB0LjAKwqA0AWAZmlAAnWAFB8Srg0HqmrASB+TAaA+E4dAGkZALIIyCwFyLpAJlZsYF1AVlYEyYpgZl2AbCaYNafYaPHLS+wG17hqXFuQHsSGVhkAt2UyACQYAchvZQe+L163uoMzBP5Ylqft86s9ULzxxF/FeU/xE8T9/FzdflcH4M97QHGyyt2dfKALrutv4oMwAF7pM6a/doYwPJod4+MiEur2WxxA2XVV+KA0BeLE92Kn8QB8L3ZKIQQeNx7ApqmyMwD8tAjmha841uoOTra+CPpF64n5FChvgyFe1+13tROh3/29bI8/8NiH4en8RIj7P+1wWydCGmQAqOIIwJZa8v/oQJf920VubE1AKr9gANgiAJYCbDXA7XoRhFKrH0BQPS+ovu+bTCbXZH0DOqaXbcVbu5EAAAAASUVORK5CYII=">

                </a>
                <h3>ISO</h3>
                <p>Explora nuestros cursos sobre normas ISO.</p>
            </div>
            <!-- Categoria 2 -->
            <div class="icon-card">
                <a href="#">
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACf0lEQVR4nO2av2sUQRTH5yLYWAVsBK1yO+8SiGBjIYq9IPgrhdk3i50gyuFfsAhi/BHvvbUIltb5C7SwUItA0gkWahGLKGIjWGmUrMzebMQLnvt7JzpfGLjbvXvzPu+9mbmdOSGcnJwq18xcuBcU3ZGKP4DiuI0mFb0Hxbe1L4VBtIG2AGC0IS0UBjHRiAGjYyWCkThS3Ac+nmZGtOWENTbABieEA7EsmqIaG6XlQMYGIwwnJPJ1qfgtKNoqP7/TVmLL574QcSebE/kFozY0RG0LVgKj+6AzdfUhtkGSTHDsBXy2TIR+ixbyebNgvUn6uLi4v3YQMOX0pzIopriTllljpQU1TWPj7DqQohmRSE/Mr8yvU5cWD40YWjbj4OPs/NKk1Rnp+tGMRNpMHEZ+mF73gvtH07ElA8ZdUVoS6cEQhDa7QTRlvvN0mCl+VmStaAVkdn5pEpA+GZhHgIPTw5Lib56i6cwdtQ2iBQFdNtPpD4m8bkrtphgjK0HE8GfMWvpZqejdYby3L09HDSyI/FcQs+HwateDAPINU07rEvm1eX03D0jWe1mVGwR8Ar2OpFMtBIMLZrB/76roSOaOWgUJwwlAemEcf6nf6+lWKloxg39VzC3vsR5EKr6S3vcUn0qv91R0Mr3eQ75qNUjPHxwA5M/m/vMdkMiPzVj50vWjg9aClJUDKZ6Rf+TBSppH3Z6ic9XAxJ1fU3STj7o+9+vqBFR0rbHNB6Ej6HNfR6+67SBtS0M0uB3UhhxIlcGwJZrgQGyKpnAZ2XkYqg8kRUsZ8fzBicQG8kZRG0IfCde3gHKuJhXfKgySPL8jLWwfU7fRkDc0RKk/DDg5/Uf6CQ3Yes2cYRRLAAAAAElFTkSuQmCC">

                </a>
                <h3>Excel</h3>
                <p>Trabaja con hojas de cálculo, fórmulas, gráficos y más</p>
            </div>
            <!-- Categoria 3 -->
            <div class="icon-card">
                <a href="#">

                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAACXBIWXMAAAsTAAALEwEAmpwYAAACYklEQVR4nO2Yy4rUQBSG48bLGzgguOmcE9u1t4UXRB9AsVc5p+cJhLEVETe6FDQ5J+BO0GfwslNHnEF03Lh0JQjCuHKjgq5sqU7SE2am09WpzExg8kNBp5P8+erUX1Xp9rxWrVq1KtXh+Sf7kVSA5DuyDre4ffBcZWC3AXSYN2fgvLIQ6jFvC4WkK8Dy3t2orp5vl7AF3lzI8tEy5y8aEQmcYWJ2wqTbGGCv/Jp76XVy18moDqHFc8xKNbqO5LOTUR1Cy+cg65fSWDQNGEgelMaiacABy6nSWDQDeLgHWJ8i6UvzGVm+mWuP9OOjjQRG1l5aVf1kjoFFJ8Zip4DRYiMBlq9dijrNACZdsdlEgPQnUhzuOPA0HepFB5D1UaHaj7u9O3sbC5wLOGFg/Z1Ba6VsVfmFgQ6F8UlOZPH4UTlbVvnjtRd215Ec39/0SOwOYAzlHJAsmvCPGsliwMnZOoCxH19B1qVp3tbAGOrtyRnVWy7AMN7RpntbAQekF5HlH5L8AZaF7vzDg0EYzwHpNfOdOedzfKEKMKaVHdp6j+8H1lXzwe9Hx9c/BEieZ7N9YcM5lkFWiWeVgFmXbL2DMDmZHa+aZSyatjyZ3mdG75BkOTWJ56osdd4a1K9ZvYHlfv5XVZRXerNmDEZVIVk2lakKDIV1OQe28TZs5sW+czXZVzqMhUgMNgwxJTdmicR6Ienb2r1N6AuTbmB6nvX+OpL8NeeA4vNeBQUslwuTrj5vs7xMHGLSm56DsGT+OHn7fTmDrK9N7tLsySs/jE+7wOby+3oJWN+kG0e93q1atdqN+g80WaDudk8tLAAAAABJRU5ErkJggg==">
                </a>
                <h3>Logistica</h3>
                <p>Aprende estrategias para optimizar cadenas de suministro</p>
            </div>
            <!-- Categoria 4 -->
            <div class="icon-card">
                <a href="#">

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150px"
                        height="50px" viewBox="0,0,256,166.39063">
                        <g fill="#275d90" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <g transform="translate(-0.47369,-0.07968) scale(13.47368,12.8)">
                                <g id="surface1">
                                    <path
                                        d="M7.07813,0.28516c-1.41406,0.01953 -2.17187,0.21094 -3.16797,0.82422c-2.13281,1.28125 -3.54297,3.9375 -3.54297,6.66406c0,2.83594 1.625,4.95312 3.76562,4.95312c2.05859,0 3.76563,-1.83203 3.76563,-4.07812c0,-2.125 -1.42969,-3.62109 -3.43359,-3.62109c-0.78516,0 -1.51953,0.23438 -2.28516,0.75c0.66406,-2.96094 2.68359,-4.99219 5.11328,-5.17187l-0.00391,-0.32031c-0.05078,0 -0.09375,0 -0.14453,0c-0.02344,0 -0.04687,0 -0.06641,0zM14.52734,3.58594c-1.25781,0.01562 -2.14062,0.17969 -2.89844,0.51172c-1.69141,0.78516 -2.64844,2.17969 -2.64844,3.83984c0,1.15625 0.43359,2.33203 1.23438,3.26172c0.90625,1.0625 1.89844,1.52734 3.27734,1.52734c1.1875,0 2.19922,-0.37109 2.99609,-1.10156c0.78906,-0.73047 1.25391,-1.74609 1.25391,-2.71094c0,-1.35547 -1.01172,-2.69141 -2.85547,-3.77734h3.81641v-1.55078h-3.95703c-0.04297,0 -0.08594,0 -0.12891,0c-0.02734,0 -0.05859,0 -0.08984,0zM13.43359,5.13672c0.00391,0 0.01172,0 0.01953,0c0.02344,-0.00391 0.04688,0 0.07031,0h0.54687c1.49219,1.58594 1.82422,2.26172 1.82422,3.72266c0,1.85547 -0.87109,3.10547 -2.16016,3.10547c-1.60156,0 -2.92578,-1.80078 -2.92578,-3.99609c0,-1.67969 1.03906,-2.79297 2.625,-2.83203zM3.85938,5.88672c0.00781,-0.00391 0.01953,0 0.02344,0c0.02734,-0.00391 0.05078,0 0.07422,0c0.87109,0 1.46484,0.37109 1.87109,1.22656c0.34375,0.71094 0.53906,1.58594 0.53906,2.42578c0,1.54688 -0.76953,2.55078 -1.95703,2.55078c-1.53125,0 -2.50391,-1.62109 -2.50391,-4.17187c0,-0.44531 0.03125,-1.00391 0.08594,-1.26953c0.01562,-0.06641 0.01562,-0.06641 0.01562,-0.125c0.82422,-0.46875 1.27344,-0.625 1.85156,-0.63672zM3.85938,5.88672">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
                <h3>SIX SIGMA</h3>
                <p>Especialízate en una metodología de mejora continua</p>
            </div>
            <!-- Categoria 5 -->
            <div class="icon-card">
                <a href="#">

                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACjUlEQVR4nO2WT2sTQRTAo8U/KAFF8Wi1dt/EggoW9NCDiKKiF0H3kORNFnLIQfAj1Ogxtu57W4uQkwdBavsBRD3559hDwQ/g1YuCQlFRqcxm18xudtMmJMjG+UHYZWbem/djZnaSyxkMBoPBYDAYhoqQvJHlHyDXMy8CoUSWRUCXyKoIxCWyKAJJElkTgTSJFJE3Vtm9BsX5g6r/ROnR/smKdwyQrgtJz6Jj6a6eCyQ19f6OyezlMavkToDkWUBa702EInN1F0F+pSZLG1uQ7Ghjf09JPhzpd7zpriIaFtLZrctQd4m4SKHsnm4XPQ9CcskvvuKdF9VGXiC91ZI/T8oHSKtbEfHHSp4diIRCD5quNfe0C+JPkf0p+Wds9W6EY4VDR8L3Anq1JJEgxw+BfC9sU1t2IBIKPdCqPDjzt6CKdwmQXgikbx2HTtLH6VpzR2vkxjaB/Fo9/XzVRh6QvyaJBMV9Cdsmb3u7BiKhiBX4sl1gC7VKluSrIPmpkPQr+HrcD/vBcWf8NsediR96PU9rFem7XmD6ilBvEnGRYMu8s6R7MenQq1XyV6hMQotfDGIX44e+vzNCvUskirRX5zMgrwhJlyMyZSpG42ktKGAtUiTSau9fLepPIi4CyB9A0vtoG62PO493pyao17eru0Y9I8Lo1TrG2stj/p2UeI9Q/xIdIpLuqDbAhaMF6Z2DMl8oyIcH+spbbeTT5hnYdkr9auHCqVwXpuz6zvD9JM7tFchLIPmWkGz7T+Ql1Z4UO1SJhK21IiruzeNFtsYd2qe2ywTOHQL0rgikJ+oQa3F2SnF2LoGhSig2v1n/wR/AfhgJCcVISChGQkIxEhKKkZAwGAwGg8FgMBj+G/4AK5C3GOJID24AAAAASUVORK5CYII=">
                </a>
                <h3>SAP</h3>
                <p>Gestiona recursos, optimizar procesos, para la toma de decisiones</p>
            </div>
            <!-- Categoria 6 -->
            <div class="icon-card">
                <a href="#">

                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACxklEQVR4nO2au28TQRCH1wghqACJAiSEJSTvGAsqGkCg0IFS8XKBb8YuECWYVHQYiiRGCp6x5KRCpAEq/gHo0oIoUlAQKlBAlISOVw7tec82kSXwvXwk95NWPo3vZvfb2Zu93TulMmXKFFqlcmMHEN/XJJ+AxB1X0cQfgaRp2hMIxFw8TgDYWJBnA4HYnnAB26fUGKVJTvuRCeTA7wmVAkGYtmQgMQiyiKRMkKL7NUaQRmObRpnSJO+AeD18rud1z5cjdaXcXGIgGmUqtsnLgzF18IUo/aqhIF4kxC1U5WJkPYdy2U5eK14dV+f2xQ4CdjhFOwzcnD/MEhtaEFMmiMMvbFkQcKSukW8XndYB32aOjc2z05zeaPdv7HSBoCx5CQC56ts0yjX/XE18pwdCUus+HctS6kA08bS1d/o2WRwAedG7Hnne2qZTB1IgmbRZ5+UA3AoQr2mUtxrl68REY7tnR3nlRY9kMnUgh8vN3UD8UyN/P1h+sKtU6+z3eh35uSZ+ZI6LtfbxfG1xpyb5Bii/8jXekzoQI0Be9hrstE8ASdlG6G6B+LodSreKxCe79wcvq7/4TWBClOEgJAu2kTc1sViQc0WUoxbkmYGx58ynFwRbTrfB8liTvDaz9LHKwl7zkAkkXzTxZ03y1F5f+Ve/YQRBQI5UOnmbVlc1yQ8gfuP/Z7KWjdCa+S2RHEotiBGgfOiHlB8O2O/1UjHyezVEqQLR/aHjmgmxZ8f2+QGQJyNXmnhEHD5rN+iag8PHpFrfbs4ZudKkQcIoAwkekU2ysNJ2qVskvhQNjJuDautK8ktdR+pRVvJnad9IbPNBmR40C6nu021E20HGl4FIcDvofxJkICpdvQBh2pKBxCDIIqL6L0PNy0g1RhWc1hkvIiirgRyY18HxTZijF00yE/yDAeTZ3mvqcRX0VqozgT8YyJRpC+s31uYTipruIFQAAAAASUVORK5CYII=">
                </a>
                <h3>Office</h3>
                <p>Aprende a utilizar Word, Excel y más, aumentando tu productividad.</p>
            </div>
            <!-- Categoria 7 -->
            <div class="icon-card">
                <a href="#">

                    <img
                        src="data:image/png;base64,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">
                </a>
                <h3>Ingeneria</h3>
                <p>Analizar y resuelve desafíos técnicos, impulsando la innovación</p>
            </div>
            <!-- Categoria 8 -->
            <div class="icon-card">
                <a href="#">

                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEQAAABECAYAAAA4E5OyAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFJklEQVR4nO2b+Y8URRTHC1DUKF4YD0RXl+l6zUS88E50PWL0BzUejC7T780QFASR4IXnD+OBBrK7/V7vblAiCWqIURAU8MQDFUWi/uQ/hHkzO2xvT88ws2Q2Ozv1TToznaqu7vrMq1evXtcY4+Tk5OTk5OTk5DTtlc2V5voozwLyJ0Cya4YfH1sM12mfU2H09ZVOsSjf+xitzgTRwiX5refN5EP7qH0F4u9MbtecGiBQCJdZkldNl0n7rH2vKQCUt7wC32G6TF4Q3g7Ib9cUWOJ3AaPbWm2w7hjsEPnEt1qS9yYNJBNEWW3AkhwCkt8B5Ucg+RmQD1viESVuugFI9smh8y3JDouyx2J499LV206dWOPYLD8Ir7fI71vkA7Y47JuZCsQWh31L/CcUoruau8mgVeuxGN2v5725zedM16HVMhDoH1lgUY5Aka9o5UYe8SqNZ/wgvARIjlqSnWpFprOBHJulPsIr8rWt3AQwDAB5b5bkcrWsDEXXWZQSBLLBdDIQG0SPp05JDQQkeSD5ctGKwcsA5Q/1K+WCUmm2Ol4NikzHAkH+JRNEZzfdeMDLFYZGgWUYxWhpvNxD6QfijaYTgUDFd+xptmEgyVmS/RUYfNgrDN2UrHM1DpypQ9B0IhCf5AHA6KVmGi3/8shfeYWhS3V2SYMxfh851E7nWnkW+bYcH8UOi7KpNlRoAYgNwqfUH5zoASzxE5Zk31X9cpHC8IPolhPU/8KnkfmmDfLyYS+QfL0wN3TGhAL1X8QbgWTNpIF4xKvUJzR6AHW6luQ/IPlwzDqOLl4uXsNrUHbb5YMXmDbIR7kXiN9IK9OZElD4pIaMRXn+BDD2ZdZHp+nQssTbsjiUscR/NYLSziHTViBQcaq70xovpwqQD/QUd5weu/4FIN5ucfhKheIRL05ep6as6x7TJrUViKq8aFu5ZZ5JziYJGFVZlJd1LVO1FP2Ml/vEj0Igr5sOBpKP32AsibQ/DUYqFJQj41COzbLIv/biwIWmU4GYUmm2jnld8qcNk3qyyK8AydY4FEv8XDutY2qAGGMW50d7LMo/gPxNMzCq0s5b5EGFAcR/awSrgGvqrdwyL57r7CnyuWY6A1HpekRD8UYBV1wVh8w/VKdtPc/mRs+K19EgSYefBnTxbLjGKYDy22Sm5ikDosoWRy8G4s8t8ke6ek2bOsvWRPKOroGAwhtMAwHxfboCTi9Tx11/yp8WQKqygdwIJKNjKcODgPKZDqfKuXxqkR9uJs6odDpcl1oW8J1A/KbpBCBJs1fLacW3zGggJ6NWgGiiSRNO6twt8r/VQ60SkFd0HRBLstPD4WvqvW1UK+02IIfqtWOJB6oO3AExDkiNnIV0GhDoH1mg65ja/Ri8XTNaXedDAHmvtpPcj6GzRDzB3DVAbMOHHy9zQIwDUiNnIQk5IAk5IAk5IAk5IAlp1r36HQJ+qF5WTLNpPvJrx68jPpj2XnaszWHIDy3R7z5FfbqbMq2eh3wzEG+Z+jgEZZNm1HRTbPwAks0W5YPxBxmZr+9ugKL18XoWeW15M99YJ1X6TlZTACltvqiQq7A0b1ve+hXIhkS9NUD8k3Z+yoEc3/tJkosfNpB7kqlFTSR7BXlkQl2UxzQ3axLSaDTZJmD4YDJ5rfvZNI05oV4hXJYpRItMiuoCcRt3E9Jfxnbh1m71Vdr32pLcrjm6Eb6bNv9DgZ/WzTWpm/9V2VxpriV5Rv860R1/D+G19WYvJycnJycnJycnJzOt9D/MUrQSHkx1EQAAAABJRU5ErkJggg==">
                </a>
                <h3>Adimistracion</h3>
                <p>Toma decisiones estratégicas y optimizar recursos</p>
            </div>


            <!-- Categoria 9 -->
            <div class="icon-card oculto">
                <a href="#">

                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACy0lEQVR4nO2ZTWxNURDHp61vIYQIgkb73pmbl7REiY1ogoWFjUjR3pn31KJBIliJWDx2qu2bua1I2kiaWLarRmwkJBaIhYiEsEAiPuIj1LdGy5P73umCRRV97Ttxf8ubc+ecuWfmP3POBYiIiIiIiPgPiKdkpednVoHLGGpfblg/IutbcJdsiWG5gKxZJDkLroKkjTknWF9VUMsCcJFE6tRCQ/o6dMTzpR5cxZD22pA6D67isW7Jh5S8q9zVuhRcJOYHs5HlceiIIdkLroKkXXkn9Cqk06XgIh4HtcjyHUkGYn6QABeJ7Q+mIsndnEqRHAFXQZZmq1K3apo6J4OLxKl9hSH5iixDyJnV4CK1telJhvWGTfCT4CphPtia8bCaWmaCi3jcapD1c6hUcc5sAjfJliDrxXyCaxe4CrLuyeUF67OqhtNzwUVwZ8diJO0PHYkndWvBJkqwLivkVzKsfValegs1B+Du5llI8gVJn2BDW9VY2zcsO/IhJW/CMwcUjHS61JCcs0nYH0/K+rEy7XHHPMPy3NpuhPEoUshyxrYMA8YPto+F3fDcbdvzS6FqwfjJoxyzxWroX88GhjIbwnphSD7FkkEljDfo6wEk/WYvAU78jY2aps4ZyPrAJvghmChMUinf1OV0vzsMvT96nzWweXEd6nrKCrfSUWB83WhI31tn+pbUtU0fzXtxkrW50GQdDG8MoRgwvq5BkpdWPq+Z+tb5I41P1KWnGNLbdjeOQzERSwaVSHLfisCdkW45hsXCsN4rT3VPg2LD8zOLkPSm3ZmnJqnVv44xqXYvlO5QKAzrOihWylMyB0kvD1fpnxYbFlWWK3Y3AnDiwoC1Z7hwIum28LlhOWgL36Ow5QEnqOspMyyd9usPIstRw/Ih70iwGVzDkBy2RTPr/G8Aw7rPdgEvfifNRY+XCmriDZmKiV5HREREBBQtPwD/clApG3P1CQAAAABJRU5ErkJggg==">
                </a>
                <h3>Calidad</h3>
                <p>Explora técnicas para medir, analizar y mejorar continuamente</p>
            </div>
            <!-- Categoria 10 -->
            <div class="icon-card oculto">
                <a href="#">

                    <img
                        src="data:image/png;base64,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">
                </a>
                <h3>Ambiental</h3>
                <p>Descubre prácticas para conservar recursos, mitigar impactos</p>
            </div>
            <!-- Categoria 11 -->
            <div class="icon-card oculto">
                <a href="#">

                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE30lEQVR4nO2Z/U9bVRjHL5vZYsz+Af1ROKdDRf1F94PKpi66+BKzyGLoOZ2ymE3NpviWaEzqRkxEpM/pWNT5Ml6GRolh6AwiZrAAigMiuLlhAHlzjpWuyEuhpS19zDnt1eJ0vR2lvTN8kpO09557zvd7Xu95rqat8L8AMyxcPEgZHKZc/EoZ+AiH84TDdxYGr9DHyq6VubKsjgcoE2cog1bNLBAu7iBcnKRc4H+miKF2yiEc+S/aNLNAGFy4pPiYRLgIEQ7P5+bar9LM1AOUwU+XFg+yF8Lrbc5tmjnBDDW+uagkXPTrc0COdcJgONr6RdqVhsXq3BDtBXcOK7lGu9IgXBRFh5BDMwvU5niUMNFAufAQJgJqeDBAwkSQcJigDFoIF09rGq6SQ0jdz9+/RV6L3IMJlZdBZGJHyvBQJuot+bB1+YRvd+xSFRlecSBAuJiJjn9l1FBiwkOtsDNpwjfklV5NGHTpFdy26z18vaIJv+0awN/Gp3DOH8D5YAjPeabxeM8Q7qtsxo3PfnSRMHltX1WzyjPmmVHPzPkDOOqaxMauAbSXH1NlxzTAqSXPmyzbu9dRDlOywJt3HMCDRzvR65vHeIQWwlj/Qx8+/Gq1Sl+f6MOFcDjuc17fPB78skPVFTUyKTVcnvq8mjWUC5csaPOLFdg74sZU0TviVnVGd/HxzPudaxPWT5k4IQu4a8+HeH5iBlPNmGcG79zzgW6iPSHxmdyZKx+84fH9eHp4HNPFz0MupUFqud4KGw0bIFyo3XNvRROmG3v5MX25HTIkPjsfbrFwgTc9UYbuydl068fxP7xKC7UJzNkmbozf+kx8Ih3veOsImoWC4lrVC1kMqowYGJKZq77pRrNQ2dAdmcxWGIxrgHIxJzP39I+hWejuP6evRrPxeyB6apK7rFkYdU3qBsJGekBl9s0H0SzM+QN/vWIYNhAMLaBZCARDiRuY8vrRLEx6fQkZUHOg/+wFNAu/jLp1A/HnAOEQlJkbO/vRLDR09EV3YwgYMBA5tBRVNaNZ2FvRpPeAO74BBj/KzFterkSzcN9LlcqAhUGnAQOlQp8w8pSVbn53T8ee0kqM9MAj+gNlte3p1o/i8+9jzsuOh+IaoAXF6ygDdQiXZ9RZXyCtG9jtT0XPyVJTQfE6zQgW5qjXXVc39qT/JY6r88BXhsQrAxy26g/KFpDv5KnGNeFdFKUwNHx0ZPRYP5XJtLP0CzQQVEga4TDikyV1sbGiAS2vZrWWCJRDQaQAZ8qH0uHGnkUxpSwGNi1h8mpWxwa01tuceKT1zLKLr205reqKCc13JNz6OpnceSvhYl4vLHu7E+vaelMnnoGf2ESOthQod+6O7U6LTeCbH7egPxBKmnB/IIRvVB9XZS+KrzLHM0sS/7cJ8c4/Y50ycmY0ZBgvBLn5hfJI4yyu44CWNOz2VYTDoX+LJt9deAjf/qwN206NqOVWBm2nZv3Yf9aj5oxM8vf0rF/dk3laTw5jyaetuKnw4iBwdNV5X9apJRfMIEzYKRMLhkPlCScIUQavacsJtTk3qe9gSRZPOPRZuDNXSwWZu51rCROFhMFIEoQPEw7PZefZ12ipRu7YWdxxL+Eg5MdrGY6Xyy7hMEM5DFIGdSpxGJTXokuyS316YgKIVdxz2Wv8CitoSeFP+ek/ZkH6XiYAAAAASUVORK5CYII=">
                </a>
                <h3>Inocuidad</h3>
                <p>Implementa buenas prácticas para garantizar la calidad</p>
            </div>
            <!-- Categoria 12 -->
            <div class="icon-card oculto">
                <a href="#">

                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE1ElEQVR4nNVaW4gcRRStTXwjaBRfuBJYt6tmR1fBoB8qLogg6peQ0TBzb48SjR8a0YiPv5EIJqDT9/aaRPLhg/ij60dEJVEjGI2i65eiWfGBIQkmoMQgollNsiu3u2a3mXW2e3p6pncPFPR0Vd2qU1W37qNHqS6hUPVXGOAJgzwdFOCJQsW7Ri02GOQvZkjYopE+V4sBgxW/3yBvNEhfGqQpmfzISO0UKSEZmjLA4wZog+PWL1ULERppnQGabN6FRn3zewN0zAA9rBYSNPKzjRXXQO9opLtbEXGAVxngHRFC69VCgIN8uyXwr3G9lY33rYhEfpc18vHwCNKtKlfUaksM0HdWkddFq+KICDTwE0Ff4G+Vmu5TeUGDd7M9Uj+vWLP11HaJFEu10zTQfnlfQH9E5QWN7FsiTzfXJSFiZTxjZXgqL4hdCI5G1buhuc4A7THIn7T63YDj0k1W6feovGCQDsokiqvr56WVUcAXzreW/4DqNQZKG88xSDsb9kCUvsMLI7Q/wLuWV+lc1SsY4Lq9qX4vAD/UqTwN3oMa+EjPdcUA/RQS4Ruzkil6ZkKZP6pewSD/bY/Cpxpo1CA/piv+XQb86x2kIafsDQze618wXN6yLLAPtdoSeR6A5y4M6ip+UdoGfaSvyAgvg2mR3TMiGvnQHN8po6KRD6leQrxXjfSyVfivDdIbBvjjwNIDHxD9McBHI/HIUXmngfcFcUrQll9vXOEGeXtuHrHj8p12Eu+mlREsQLATPqq8oF26rbHaqjS2tN3+4qI0ds2peHeovGCQPgydPnoyndM33Sd97VX+gcoLBmlvsCPl+nBqGeX6sLUfe7OdXTuTQB6zbvjqtDJ0xbvP6tmYygsF5KpdzYMa+NF2+0sfueHCyJFclRtKY0sN0FsNd6VdPZl1S3h7msuia7oiFjuurUb6LHNDChmFAAZosxW4IZ50dzwClQV0ha9t2BPxp5IQyWRglb088b/etjZltwRLi5bI5fc8f5kB+jW4gdz6dZ0M7CANBbkv4B3y3FMioVD6qhMiw+UtyyTlqpH/iXjDxzXSVgkL2pXX8e3VLhFJJRn010aixBMa6EUp8myN7hFpE5d2ygQS3cVdw80DO+jdopG+mdkBoN0OjF49I7M6WtDA783W8/cGudQ1Ileu4os00p+WSH9SIpEJ7oumXOf0c72VQZuE+bL0jl8QXAXHYue8bVtMpL9UPzNuHGnTFSJh7E2bgwR26Kb8UKh4l6QhknRMkxWRUDG5pJE/ioSxJzXQq0lyUq0mEjdBk7BdEgJnibeqkX6JKOZfcjUOud4VSeXkSGS6rwD+Gg10OLIDExrpkTDd0x5yOVrF0qaz5QtUhMB4p7F1z4kMrvVPjyTNfpNkWicE4ibSblFJiRhgsnqwvwj1wSxI9JxIEeqDwZUKfHI+dyMLIl2VZ4DW2914P6sBEw2cPREeDxq49EAa4Rr4zbRHxrQTykrOIPQmploRmc3ZLpBSrG66+H89i/DkHJ5DYnn1lTMyXMnJTnXMAG2zq/54c50GfsmO85rqBoLPzjNZdvpDDOp84W/sv4yQTkiwpZGfCr4CuHyVuESWxLEk2ZvUEOcx8smgOwVoMiv7FrszDtL94ZetmWRcx0WLvwe0LS6eX5T4D8skVRx3k39JAAAAAElFTkSuQmCC">
                </a>
                <h3>HSE</h3>
                <p>Aprende a implementar prácticas seguras, mitigar riesgos</p>
            </div>
            <div id="ver-mas" class="ver-mas">
                <button onclick="mostrarMasCategorias()">Ver más categorías</button>

            </div>
        </section>

        <!-- Baner membresia -->

        <br>

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
            <div class="right-content">
                <h1>Membresia</h1>
                <p>Se un Socios SAR y accede a <br>
                    +100 Cursos especializados .</p>

                <a href="membresia.html" class="info-buttons">Adquirir Membresia</a>

            </div>


        </section>
        <br>

        <!-- Separador Gratis -->

        <div class="separador">
            <h1>Cursos Gratuitos</h1>
        </div>

        <!-- Cards seccion gratis -->
        <section class="card-containers">

            <!-- Curso gratis 1 -->
            <div class="cards">
                <a href="#">
                    <img src="src/Cursos/word.JPG" alt="Curso Imagen">
                </a>
                <div class="card-content">
                    <h3>General</h3>
                    <h2>Microsoft Word</h2>
                    <p class="price">$0.00</p>
                    <div class="students">
                        <p class="stars">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <p class="students-count">4687 Estudiantes</p>
                    </div>
                    <div class="cenBot">

                        <button class="buttonM">Añadir al Carrito</button>
                    </div>
                </div>
            </div>
            <!-- Curso gratis 2 -->
            <div class="cards">
                <a href="#">
                    <img src="src/Cursos/excel.JPG" alt="Curso Imagen">
                </a>
                <div class="card-content">
                    <h3>General</h3>
                    <h2>Microsoft Excel</h2>
                    <p class="price">$0.00</p>
                    <div class="students">
                        <p class="stars">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <p class="students-count">3123 Estudiantes</p>
                    </div>
                    <div class="cenBot">

                        <button class="buttonM">Añadir al Carrito</button>
                    </div>
                </div>
            </div>
            <!-- Curso gratis 3 -->
            <div class="cards">
                <a href="#">
                    <img src="src/Cursos/power.JPG" alt="Curso Imagen">
                </a>
                <div class="card-content">
                    <h3>General</h3>
                    <h2>Microsoft Powerpoint</h2>
                    <p class="price">$0.00</p>
                    <div class="students">
                        <p class="stars">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <p class="students-count">3853 Estudiantes</p>
                    </div>
                    <div class="cenBot">

                        <button class="buttonM">Añadir al Carrito</button>
                    </div>
                </div>
            </div>
        </section>


        <!-- Cursos Premium -->
        <div class="separadorzx">
            <h1>Cursos Premium</h1>
            <div class="studentss">
                <p class="starss">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
            </div>
        </div>


        <section class="card-containers">
            <br>

            <!-- Curso Premium 1 -->
            <div class="cardsP">
                <a href="#">
                    <img src="src/Cursos/Supervisor.JPG" alt="Curso Imagen">
                </a>
                <div class="card-content">
                    <h3>General</h3>
                    <h2>Supervisor ambiental</h2>
                    <p class="price">$290.00</p>
                    <div class="students">
                        <p class="stars">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <p class="students-count">5687 Estudiantes</p>
                    </div>
                    <div class="cenBot">

                        <button class="buttonM">Añadir al Carrito</button>
                    </div>
                </div>
            </div>
            <!-- Curso Premium 2 -->
            <div class="cardsP">
                <a href="#">
                    <img src="src/Cursos/IATF.JPG" alt="Curso Imagen">
                </a>
                <div class="card-content">
                    <h3>General</h3>
                    <h2>IATF 16949</h2>
                    <p class="price">$890.00</p>
                    <div class="students">
                        <p class="stars">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <p class="students-count">6500 Estudiantes</p>
                    </div>
                    <div class="cenBot">

                        <button class="buttonM">Añadir al Carrito</button>
                    </div>
                </div>
            </div>
            <!-- Curso Premium 3 -->
            <div class="cardsP">
                <a href="#">
                    <img src="src/Cursos/seguridad.JPG" alt="Curso Imagen">
                </a>
                <div class="card-content">
                    <h3>General</h3>
                    <h2>Supervisor de Seguridad Industrial</h2>
                    <p class="price">$890.00</p>
                    <div class="students">
                        <p class="stars">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <p class="students-count">3253 Estudiantes</p>
                    </div>
                    <div class="cenBot">

                        <button class="buttonM">Añadir al Carrito</button>
                    </div>
                </div>
            </div>
            <!-- Curso Premium 4 -->
            <div class="cardsP">
                <a href="#">
                    <img src="src/Cursos/iso2018.JPG" alt="Curso Imagen">
                </a>
                <div class="card-content">
                    <h3>General</h3>
                    <h2>ISO 22000:2018 Sistemas de gestión de la inocuidad de los alimentos</h2>
                    <p class="price">$290.00</p>
                    <div class="students">
                        <p class="stars">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <p class="students-count">4253 Estudiantes</p>
                    </div>
                    <div class="cenBot">

                        <button class="buttonM">Añadir al Carrito</button>
                    </div>
                </div>
            </div>
            <!-- Curso Premium 5 -->
            <div class="cardsP">
                <a href="#">
                    <img src="src/Cursos/six sigma.JPG" alt="Curso Imagen">
                </a>
                <div class="card-content">
                    <h3>General</h3>
                    <h2>Six Sigma Black Belt</h2>
                    <p class="price">$890.00</p>
                    <div class="students">
                        <p class="stars">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <p class="students-count">5253 Estudiantes</p>
                    </div>
                    <div class="cenBot">

                        <button class="buttonM">Añadir al Carrito</button>
                    </div>
                </div>
            </div>
        </section>
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
                        <!-- <svg fill="white" xmlns="http://www.w3.org/2000/svg" height="1.6em" viewBox="0 0 496 512">
                            <path fill="white"
                                d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z">
                            </path>
                        </svg> -->
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
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" height="1.6em" fill="white" viewBox="0 0 384 512">
                            <path
                                d="M290.7 311L95 269.7 86.8 309l195.7 41zm51-87L188.2 95.7l-25.5 30.8 153.5 128.3zm-31.2 39.7L129.2 179l-16.7 36.5L293.7 300zM262 32l-32 24 119.3 160.3 32-24zm20.5 328h-200v39.7h200zm39.7 80H42.7V320h-40v160h359.5V320h-40z">
                            </path>
                        </svg> -->
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


</body>

<script src="/js/Acciones.js"></script>
<script src="/js/Carousel.js"></script>

</html>
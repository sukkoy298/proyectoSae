<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>

<body>

    <!--navbar-->

    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-toggler">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo_h.png" alt="SAE" width="150px">
                </a>
                <ul class="navbar-nav d-flex justify-content-center align-items-center">
                    <li class="nav-item">

                        <!--enlaces a otras partes de la pagina-->
                        <a class="nav-link active" href="#encabezado">inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/contacto.php">contactos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="views/login.php">iniciar sesion</a>
                    </li>
                    <li class="nav-item">
                        <div class="container ">
                            <div>
                                <button type="button" class="btn btn-success"><a class="text-decoration-none text-white" href="views/register.php">Registrarme</a></button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- encabezado -->

    <section>
        <div class="encabezado container-fluid" id="#encabezado">
            <div class="row">
                <div class="titulo col-8 text-left">
                    <h1>Tu Socio en Desarrollo de Sistemas</h1>
                </div>
                <div class="iconos col-4 d-none d-md-block">
                    <div class="row">
                        <div class="col-6">
                            <div class="cuadrado">
                                <img class="img-fluid" src="assets/img/diseño.png" alt="">
                                <p>Diseño</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="cuadrado">
                                <img class="img-fluid" src="assets/img/plan-estrategico.png" alt="">
                                <p>Usabilidad</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="cuadrado">
                                <img class="img-fluid" src="assets/img/development.png" alt="">
                                <p>Desarrollo</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="cuadrado">
                                <img class="img-fluid" src="assets/img/depuracion.png" alt="">
                                <p>Test</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo col-4 d-block d-md-none d-flex justify-content-center align-items-center"">
                    <img src=" assets/img/logo_h.png" class="img-fluid" alt="Imagen para móviles">
                </div>
            </div>
        </div>
    </section>

    <!--descripcion-->

    <section>
        <div class="descripcion container align-items-stretch text-center">
            <h1>Transformando la Educación con Tecnología</h1>
            <p>En nuestra empresa, impulsamos el futuro de la educación con tecnología avanzada. Creamos sistemas de
                gestión académica eficientes que simplifican tareas administrativas y mejoran la experiencia educativa.
                Facilitamos un entorno de aprendizaje adaptable a la era digital.</p>
        </div>

        <!--descripcion-cards-->

        <div class="cards container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="carta text-left">
                        <img class="img-fluid" src="assets/img/comprobar.png" alt="1">
                        <a href="">Diseño Asombroso</a>
                        <p>Nuestros diseños destacan por su creatividad y funcionalidad, adaptándose a tus necesidades.
                        </p>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="carta">
                        <img class="img-fluid" src="assets/img/comprobar.png" alt="2">
                        <a href="">Redacción Publicitaria</a>
                        <p>Creamos contenido atractivo y persuasivo que conecta con tu audiencia y fortalece tu marca.
                        </p>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="carta">
                        <img class="img-fluid" src="assets/img/comprobar.png" alt="3">
                        <a href="">Desarrollo</a>
                        <p>Desarrollamos soluciones tecnológicas personalizadas, optimizando procesos y mejorando la
                            eficiencia.</p>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="carta">
                        <img class="img-fluid" src="assets/img/comprobar.png" alt="4">
                        <a href="">Soporte 24/7</a>
                        <p>Ofrecemos asistencia continua para asegurar que todas tus necesidades sean atendidas siempre.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--conocenos-->

    <section class="conocenos container d-flex justify-content-center align-items-center">
        <div class="col-11">
            <div class="row">
                <div class="conocenos_imagen d-block d-lg-none col-12 col-md-4">
                    <img src="assets/img/vvv.jpg" alt="imagen de aplicacion" class="img-fluid">
                </div>
                <div class="conocenos_descripcion col-12 col-md-8">
                    <h3>Sistemas SAE: Impulsando Tu Potencial con Tecnología de Vanguardia</h3>
                    <p>Elegir Sistemas SAE para desarrollar sistemas informáticos es asegurar la calidad y eficiencia en
                        cada proyecto. Nuestra experiencia en soluciones tecnológicas innovadoras, especialmente en
                        gestión académica, nos permite ofrecer plataformas robustas y adaptables a las necesidades de
                        nuestros clientes. Además, nuestro enfoque personalizado garantiza que cada desarrollo cumpla
                        con los estándares más altos de funcionalidad y usabilidad. Con un equipo dedicado y soporte
                        24/7, estamos comprometidos a transformar tus ideas en soluciones informáticas excepcionales.
                    </p>
                    <a href="" class="leer_mas">leer mas</a>
                </div>
                <div class="conocenos_imagen d-none d-lg-block col-12 col-md-4">
                    <img src="assets/img/vvv.jpg" alt="imagen de aplicacion" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!--acerca de nosotros-->

    <section id="nosotros" class="acerca container d-flex justify-content-center align-items-center">
        <div class="col-11">
            <div class="row">

                <div class="acerca_descripcion col-12 col-md-8">
                    <h4>ACERCA DE NOSOTROS</h4>
                    <h1>Tecnología que Impulsa el Aprendizaje</h1>
                    <p>En Sistemas SAE, nos dedicamos a proporcionar soluciones tecnológicas de vanguardia,
                        especialmente en el ámbito de la gestión académica. Nuestra misión es transformar la forma en
                        que las instituciones educativas operan, mejorando la eficiencia administrativa y la experiencia
                        educativa a través de sistemas informáticos innovadores y personalizados. Con un equipo de
                        expertos apasionados por la tecnología y un enfoque centrado en el cliente, garantizamos
                        desarrollos robustos, adaptables y de alta calidad. Además, ofrecemos soporte continuo para
                        asegurar que todas tus necesidades sean atendidas de manera oportuna. En Sistemas SAE, creemos
                        en el poder de la tecnología para impulsar el futuro de la educación y estamos comprometidos a
                        ser tu socio de confianza en este viaje.</p>
                    <a href="" class="leer_mas">leer mas</a>
                </div>
                <div class="acerca_imagen col-12 col-md-4">
                    <img src="assets/img/aplicacion.png" alt="imagen de aplicacion" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!--footer-->

    <footer class="bg-dark text-white text-center py-3 py-md-5 mt-5">
        <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/"
                        aria-label="Bootstrap">
                        <img src="assets/img/logo_h.png" width="150px" class="d-block me-2"
                            viewBox="0 0 118 94" role="img">
                        <title>Bootstrap</title>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                            fill="currentColor" /></svg>
                        <span class="fs-5">B y C Computacion C.A.</span>
                    </a>
                    <ul class="list-unstyled small text-white">
                        <li class="mb-2">Todos los derechos reservados para carlos y rafael que con mucho esfuerzo
                            hicieron
                            este sistema.</li>
                        <li class="md-2">Hecho para el Instituto universitario Jesus Obrero(IUJO).</li>
                        <li class="mb-2">Code licensed <a
                                href="https://github.com/sukkoy298/proyectoSae/blob/main/README.md" target="_blank"
                                rel="license noopener">LCC.</a></li>
                        <li class="mb-2">Codigo Fuente <a href="https://github.com/sukkoy298/proyectoSae"
                                target="_blank" rel="license noopener">Codigo.</a></li>
                    </ul>
                </div>
            </div>
    </footer>

</body>

</html>
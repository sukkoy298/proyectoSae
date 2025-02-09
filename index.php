<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAE</title>
    <link rel="icon" href="../../assets/img/logo_h.png" type="image/png">
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
                                <button type="button" class="btn btn-success">
                                    <a class="text-decoration-none text-white" href="views/register.php">Registrarme</a>
                                </button>
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
                        <a>Diseño Asombroso</a>
                        <p>Nuestros diseños destacan por su creatividad y funcionalidad, adaptándose a tus necesidades.
                        </p>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="carta">
                        <img class="img-fluid" src="assets/img/comprobar.png" alt="2">
                        <a>Redacción Publicitaria</a>
                        <p>Creamos contenido atractivo y persuasivo que conecta con tu audiencia y fortalece tu marca.
                        </p>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="carta">
                        <img class="img-fluid" src="assets/img/comprobar.png" alt="3">
                        <a>Desarrollo</a>
                        <p>Desarrollamos soluciones tecnológicas personalizadas, optimizando procesos y mejorando la
                            eficiencia.</p>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="carta">
                        <img class="img-fluid" src="assets/img/comprobar.png" alt="4">
                        <a>Soporte 24/7</a>
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
                    <a href="https://asistescolar.com/" class="leer_mas">leer mas</a>
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

    <footer id="footer" style="background-color: #EAEAEA!important">
        <div class="container">
            <div class="row">
                <div class="footer-ribbon">
                    <span style="font-family:sans-serif;">AsistEscolar</span>
                </div>
                <div class="col-lg-12">
                    <div class="newsletter">
                        <p>En AsistEscolar nos enfocamos en cumplir los requerimientos de instituciones educativas; públicas y privadas, con diseños e implementación de sistemas; con interfaz amigable, y en el establecimiento de un buen equipo y mecanismos para asistencia y soporte técnico de primera.
                            Nuestros sistemas son Autoadministrables y AutoConfigurables, brindan respuestas a requerimientos de la Comunidad Educativa (estudiantes, representante, profesor, institución, otros) rápidamente con solo un clic.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-details">
                        <h5 style="color:#888888">Corporativo</h5>
                        <ul class="contact">
                            <li>
                                <p><a href="#" style="color:#888888"><i class="fa fa-angle-right"></i> Asistescolar</a></p>
                            </li>
                            <li>
                                <p><a href="#" style="color:#888888"><i class="fa fa-angle-right"></i> Blog de Asistescolar</a></p>
                            </li>
                            <li>
                                <p><a href="distribuidor/" style="color:#888888"><i class="fa fa-angle-right"></i> Trabaja con Nosotros</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-details">
                        <h5 style="color:#888888">Ventas</h5>
                        <ul class="contact">
                            <li>
                                <p><a href="contacto.php" style="color:#888888"><i class="fa fa-angle-right"></i> Informar Pago</a></p>
                            </li>
                            <li>
                                <p><a href="contacto.php" style="color:#888888"><i class="fa fa-angle-right"></i> Contactarse con Ventas</a></p>
                            </li>
                            <li>
                                <p><a href="#" style="color:#888888"><i class="fa fa-angle-right"></i> Planes y Precios</a></p>
                            </li>
                            <li>
                                <p><a href="contacto.php" style="color:#888888"><i class="fa fa-angle-right"></i> Solicite una Demostración</a></p>
                            </li>
                            <li>
                                <p><a href="distribuidor/" style="color:#888888"><i class="fa fa-angle-right"></i> Alianzas Comerciales</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-details">
                        <h5 style="color:#888888">Soporte</h5>
                        <ul class="contact">
                            <li>
                                <p style="color:#888888"><i class="fa fa-mobile-alt"></i> +58 0416 6562698 / 5014354</p>
                            </li>
                            <li>
                                <p style="color:#888888"><i class="fa fa-phone"></i> +58 0251 4452591 / 4172183 / 4468684</p>
                            </li>
                            <li>
                                <p><a href="#" style="color:#888888"><i class="fa fa-angle-right"></i> Preguntas Frecuentes</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5 style="color:#888888">Contáctanos</h5>
                    +58 0251 4452591<br>
                    <!--<em>Chat con expertos vía Whatsapp:</em><br>-->
                    <a href="https://api.whatsapp.com/send?phone=5804245900091" target="_blank" style="color:#888888; text-decoration: none" ;="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Chat vía Whatsapp" data-original-title="" title=""><i class="fab fa-whatsapp fa-lg" style="color:#7BBF6A"></i> Chat vía Whatsapp</a><br><br>
                    <font style="color:#0088CC; font-weight: bold">B y C Computación, C.A.</font><br>
                    RIF: J-30495950-8
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1">
                        <a href="index.php" class="logo">
                            <img alt="logo_h.png" class="img-fluid" src="../../assets/img/logo_h.png" width="150px">
                        </a>
                    </div>
                    <div class="col-lg-7">
                        <p>© 2019 AsistEscolar </p>
                    </div>
                    <div class="col-lg-4">
                        <nav id="sub-menu">
                            <ul>
                                <li><a href="#">Preguntas Frecuentes</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="contacto.php">Contáctanos</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portafolio Tapia</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/case.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">TapiAnt</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Acerca de</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-secondary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5 rounded-circle" src="assets/img/photo.jpg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">J. Antonio Tapia C.</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fa fa-bomb"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Dev-web - Junior - Interno</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fa fa-bomb"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">

                @yield('content')

                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-secondary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Acerca de</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fa fa-bomb"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Mi nombre es J. Antonio Tapia C.  Soy interno en desarrollo web en H&B y cuento con 7 meses de experiencia en desarrollo web de paginas estaticas, actualmente estoy trabajando en el desarrollo de sitios web con laravel.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Durante mi intership estuve trabajando con HTML, CSS, Bootstrap (4,5) y JS. Asi como tambien e trabajado con Pug, Sass, Php, Svelte, Laravel y Wordpress.  </p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="#contact">
                        <i class="fas fa-id-badge me-2"></i>
                        Contacto
                    </a>
                </div>
            </div>
        </section>

        @yield('corre')

        <section class="page-section" id="contact">
                <div class="container">
                    <!-- Contact Section Heading-->
                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contactame</h2>
                    
                    <!-- Icon Divider-->
                    <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fa fa-bomb"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <!-- Contact Section Form-->
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xl-7">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form action="{{route('layouts.store')}}" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                @csrf
                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="nombre" id="name" type="text" placeholder="Enter your name..." />
                                    <label for="name">Nombre completo</label>
                                    @error('nombre')
                                        <p style="color:red;"><strong>{{$message}}</strong></p>
                                    @enderror
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="correo" id="email" type="email" placeholder="name@example.com"/>
                                    <label for="email">Correo electronico</label>
                                    @error('correo')
                                        <p style="color:red;"><strong>{{$message}}</strong></p>
                                    @enderror
                                </div>
                                <!-- Phone number input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="telefono" id="phone" type="tel" placeholder=".." />
                                    <label for="name">Télefono</label>
                                    @error('telefono')
                                        <p style="color:red;"><strong>{{$message}}</strong></p>
                                    @enderror
                                </div>
                                <!-- Message input-->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="mensaje" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                    <label for="message">Mensaje</label>
                                    @error('mensaje')
                                        <p style="color:red;"><strong>{{$message}}</strong></p>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-center">
                                <button class="btn btn-primary btn-xl" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Teléfono</h4>
                        <p class="lead mb-0">
                            +52 6242125052
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Redes sociales</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Correo</h4>
                        <p class="lead mb-0">
                            antonio@hackn.beer
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; TapiAnt 2023</small></div>
        </div>
        <!-- Portfolio Modals-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>



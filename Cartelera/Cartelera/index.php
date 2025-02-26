<!DOCTYPE html>
<br lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Tecnologico Beltran</title>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">  
    <link rel="stylesheet" href="css/bootstrap.min.css">        
    <link rel="stylesheet" href="slick/slick.min.css">          
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="css/templatemo-upright.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Estilos responsive */
        @media (max-width:1000px) {
            .div-nav{
                display: none;
            }
        }
        @media (max-width:1400px){
            .div-section{
                
            }
        }
        /* @media (max-width: 768px) {
          .tm-sidebar {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #333;
                z-index: 9999;
                transform: translateX(-100%);
                transition: transform 0.3s ease-out;
            }
          .tm-sidebar.open {
                transform: translateX(0);
            }
          .tm-nav {
                flex-direction: column;
            }
          .tm-nav-item {
                margin-bottom: 1rem;
            }
          .tm-nav-link {
                font-size: 1.5rem;
            } */
        /* } */
    </style>
</head>
<body>
    <div class="container-fluid" >
        <div id="nav-div" class="tm-sidebar">
            <button id="nav-toggle-aparecer" class="btn nav-toggle"><i class="fa-solid fa-bars"></i></button>
             <!-- NAVBAR  -->
            <nav id="side-nav" class="side-nav tm-nav">
                <!-- BOTON DESAPARECER -->
                <button class="navbar-toggler" type="button" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
                <div class="div-nav">
                    <!-- BOTON APARECER -->
                    <div class="mb-3">
                        <button id="nav-toggle-desaparecer" class="btn nav-toggle"><i class="fa-solid fa-bars"></i></button>
                    </div>
                    <!-- LOGO -->
                    <a href="index.html">
                        <div class="logo">
                            <img src="img/logo.png" alt="">
                        </div>
                    </a>
                    <!-- INICIO -->
                    <div class="nav-item">                                
                        <a href="#home" class="nav-link current">
                            <div class="triangle-right"></div>
                            <i class="fas fa-home nav-icon"></i>
                            Inicio
                        </a>
                    </div>
                    <!-- CALENDARIO -->
                    <div class="nav-item dropdown">
                        <a href="#calendario" class="nav-link">
                            <div class="triangle-right"></div>
                            <i class="fas fa-images nav-icon"></i>
                            Calendario
                        </a>
                    </div>
                    <!-- CARRERAS -->
                    <div class="nav-item">
                        <a href="carreras.html" class="nav-link">
                            <div class="triangle-right"></div>
                            <i class="fas fa-user-friends nav-icon"></i>
                            Carreras
                        </a>
                    </div>
                    <!-- TRAMITES -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link">
                            <div class="triangle-right"></div>
                            <i class="fa-solid fa-receipt nav-icon"></i>
                            Tramites
                        </a>
                    </div>
                    <!-- NOTIFICACIONES -->
                    <div class="nav-item dropdown">
                        <a href="#notificaciones" class="nav-link">
                            <div class="triangle-right"></div>
                            <i class="fa-solid fa-bell nav-icon"></i>
                            Notificaciones
                        </a>
                    </div>
                    <!-- CHAT -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link">
                            <div class="triangle-right"></div>
                            <i class="fas fa-comments nav-icon"></i>
                            Chat
                        </a>
                    </div>
                    <!-- CREAR ANUNCIO -->
                    <div class="nav-item dropdown">
                        <a href="nuevo_evento.html" class="nav-link">
                            <div class="triangle-right"></div>
                            <i class="fa-solid fa-receipt nav-icon"></i>
                            Crear anuncio
                        </a>
                    </div>
                    <!-- CONTACTO -->
                    <div class="nav-item">
                        <a href="#contact" class="nav-link">
                            <div class="triangle-right"></div>
                            <i class="fas fa-envelope nav-icon"></i>
                            Contacto
                        </a>
                    </div>
                    <!-- CAMPUS VIRTUAL -->
                    <div>
                        <a href="login/index.html" class="nav-link">
                            <div class="triangle-right"></div>
                            <i class="fa-solid fa-right-to-bracket nav-icon"></i>
                            Campus
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Notificaciones -->
        <div>
            <div class="tm-section-wrap">
                <div class="tm-parallax" data-parallax="scroll" data-image-src="img/img-01.jpg"></div>                   
                    <section id="home" class="tm-section">
                        <h2 class="tm-text-primary" style="text-align: center;">Centro de Tecnológia e Innovación</h2>
                        <hr class="mb-5">
                        <div class="row">
                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <h2 class="mb-5"><span class="tm-text-primary">Cartelera de Alumnos Noticias & Novedades</span></h2>
                            </div>
                            <div class="row g-4 div-section">
                                <!-- ANUNCIO 1 -->
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="room-item shadow rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/20240430194758.jpeg" alt="">
                                        </div>
                                        <div class="p-4 mt-2" >
                                            
                                            <div class="d-flex justify-content-between mb-3">
                                                <h5 class="mb-0" style="font-weight: bold;">CLASE MAGISTRAL DE NUESTRO RECTOR DR. ING. GUSTAVO AGOSTI</h5>
                                            </div>
                                            <p class="text-body mb-3">Se realizará el jueves 2 de mayo a las 15hs en el Aula 58, piso 5to.  
                                                    Destinado a estudiantes de 2º y 3º año de la Tecnicatura Superior en Enfermería. 
                                                Esta oportunidad representa una experiencia enriquecedora que les permitirá adquirir nuevos conocimientos y alcanzar mayores niveles en su formación profesional.</p>
                                            <div class="d-flex justify-content-between">
                                                <p class="rounded py-2 px-4 bg-primary text-light">Fecha Desde</p>
                                                <p class="rounded py-2 px-4 bg-danger text-light">Fecha Hasta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ANUNCIO 2 -->
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="room-item shadow rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/20240424194356.jpeg" alt="">
                                        </div>
                                        <div class="p-4 mt-2">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h5 class="mb-0">25 DE MAYO - REVOLUCIÓN DE MAYO</h5>
                                            </div>
                                        
                                            <p class="text-body mb-3">Estimados estudiantes;  
                                                Con inicio de mayo, queremos anunciar que iniciaremos una importante reflexión y celebración patriótica. Por lo tanto, están invitados a participar activamente en las actividades planificadas, que incluirán charlas, exposiciones y momentos de conmemoración.  
                                                Les recomendamos leer detalladamente el material adjunto para conocer sobre esta propuesta y el material de actividades.
                                                Que este mes de mayo sea un tiempo de aprendizaje, inspiración y orgullo patriótico para todos nosotros!</p>
                                                <div class="d-flex justify-content-between">
                                                <p class="rounded py-2 px-4 bg-primary text-light">26/04/2024</p>
                                                <p class="rounded py-2 px-4 bg-danger text-light">Fecha Hasta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ANUNCIO 3 -->
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="room-item shadow rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/20240424194356.jpeg" alt="">
                                        </div>
                                        <div class="p-4 mt-2">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h5 class="mb-0">BOLETO ESPECIAL EDUCATIVO</h5>
                                            </div>
                                            <p class="text-body mb-3">Queremos informar a los nuevos ingresantes y estudiantes regulares de nuestras diversas tecnicaturas que tienen la posibilidad de acceder al Boleto Especial Educativo, proporcionado por el Gobierno de la provincia de Buenos Aires.  

                                                Deberán cumplir una serie de requisitos y, a su vez, ciertos pasos a seguir para obtener dicho beneficio.  
                                                
                                                Les solicitamos que lean la información atentamente que se encuentra en el siguiente link: 
                                                
                                                <a href="">https://www.gba.gob.ar/transporte/boleto</a></p>
                                            <div class="d-flex justify-content-between">
                                                <p class="rounded py-2 px-4 bg-primary text-light">24-04-2024</p>
                                                <p class="rounded py-2 px-4 bg-danger text-light">Fecha Hasta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ANUNCIO 4 -->
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="room-item shadow rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="img/gallery/nature-01.jpg" alt="">
                                        </div>
                                        <div class="p-4 mt-2">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h5 class="mb-0">Titulo</h5>
                                                <div class="ps-2">
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                    <small class="fa fa-star text-primary"></small>
                                                </div>
                                            </div>
                                        
                                            <p class="text-body mb-3">Descripcion</p>
                                            <div class="d-flex justify-content-between">
                                                <p class="rounded py-2 px-4 bg-primary text-light">Fecha Desde</p>
                                                <p class="rounded py-2 px-4 bg-danger text-light">Fecha Hasta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div> 
            </div>
        </div><!-- Fin Notificaciones -->


        <!-- Calendario Academico -->
        <div class="tm-main">
            <div class="container" id="calendario">              
                <section id="home" class="tm-section">
                    <h2 class="tm-text-primary">Calendario Academico 2024</h2>
                    <hr class="mb-2">
                    <div>
                        <p style="font-size: 1.1rem;">El Calendario Escolar 2024 aprobado por la Dirección General de Cultura y
                            Educación de la Provincia de Buenos Aires, para todos los niveles, ciclos y modalidades de la
                            educación, en establecimientos dependientes de la misma, y considerando
                            Que resulta necesario aprobar institucionalmente el calendario académico
                            a efectos de organizar procedimientos, plazos y trámites a realizar por los estudiantes y docentes
                            para las actividades que comprenden: curso inicial, comienzo de cada cuatrimestre, los llamados a
                            exámenes, períodos de receso y feriados dispuestos por autoridad competente.</p>
                    </div>
                    <hr class="mb-2">
                    <iframe src="https://calendar.google.com/calendar/embed?height=800&wkst=1&ctz=America%2FArgentina%2FBuenos_Aires&bgcolor=%233F51B5&title=Calendario%20Academico&showTitle=0&showPrint=0&showCalendars=0&showTz=0&src=ZXMuYXIjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%230B8043" style="border:solid 1px #100638" width="900" height="700" frameborder="0" scrolling="no"></iframe>
                </section>
            </div>
        </div>
            
        <!-- Contacto -->
        <div id="contact" class="tm-section container">
            <h2 class="tm-text-primary">Contactanos</h2>
            <hr class="mb-5">
            <div class="row">
                <div class="col-xl-6 tm-contact-col-l mb-4">
                    <form id="contact-form" action="" method="POST" class="tm-contact-form">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control rounded-0" placeholder="Nombre Completo" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                        </div>
                        <div class="form-group">
                            <input type="asunto" name="asunto" class="form-control rounded-0" placeholder="Asunto" required />
                        </div>
                        <div class="form-group">
                            <textarea rows="8" name="mensaje" class="form-control rounded-0" placeholder="Mensaje" required=></textarea>
                        </div>
                        <div class="form-group tm-text-right">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-xl-6 tm-contact-col-r">
                    <!-- Maps -->
                    <div class="mapouter mb-4">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="720" id="gmap_canvas"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d290.0371856197937!2d-58.3631523232107!3d-34.66994942321495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a33348525b8105%3A0x688c2224c9769fa1!2sInstituto%20Tecnol%C3%B3gico%20Beltr%C3%A1n!5e0!3m2!1ses-419!2sar!4v1713374033358!5m2!1ses-419!2sar"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <img src="img/inst.png" alt="logo" style="height: 10%">
                            </div>
                            <p style="color: white">Centro de Tecnología e Innovación Avellaneda-Buenos Aires - Argentina</p>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/institutobeltran" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/instbeltran/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://twitter.com/#!/CentroBeltran" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.youtube.com/channel/UC_XbNNufdrjoXTo4oaLjnaQ" target="_blank"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-footer-widget">
                            <h2 style="color: white">Contacto</h2>
                            <span style="color: white"><i class="fa fa-phone" ></i>(+54.11) 4265.0247 / 4265.0342 / 4203.0222 / 4203.0134</span>
                            <span style="color: white"><i class="fa fa-envelope"></i>informes@ibeltran.com.ar</span>
                            <span style="color: white"><i class="fa fa-globe"></i>www.ibeltran.com.ar</span>
                            <span style="color: white"><i class="fa fa-map-marker"></i>Av. Belgrano 1191, Avellaneda – Buenos Aires – Argentina.</span>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm">
                        <div class="single-footer-widget">
                            <h2 style="color: white">Enlaces útiles</h2>
                            <ul class="footer-list">
                                <li><a href="autoridades.php">Autoridades</a></li>
                                <li><a href="inscripcion_telefonica.php">Inscripción Telefonica</a></li>
                                <li><a href="trabaja_nosotros.php">Trabaja con Nosotros</a></li>
                                <li><a href="contacto.php">Informes y Consultas</a></li>
                                <li><a href="index.php">Términos y condiciones</a></li>
                                <li><a href="index.php">Política de Privacidad</a></li>
                            </ul>
                        </div>
                    </div>   
                </div>
            </div>
        </div> <!-- Fin del Footer -->
        
        <!--Footer Area Start-->
        <footer class="footer-area bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <span class="text-light">Prohibida la reproducción total ó parcial de imágenes y textos. Todos los derechos reservados.</span>
                    </div>
                    <div class="col-md-6 col-sm-5">
                        <div class="column-right">
                            <span class="text-light">Política de Privacidad. Términos y condiciones.</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer> <!--End of Footer Area-->
    </div> <!-- Fin de container-fluid -->

    <script src="js/app.js"></script>
    <script src="https://kit.fontawesome.com/9de136d298.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.4.1.min.js"></script>          <!-- https://jquery.com/ -->
    <script src="js/jquery.singlePageNav.min.js"></script>  <!-- https://github.com/ChrisWojcik/single-page-nav -->
    <script src="js/parallax/parallax.min.js"></script>     <!-- https://pixelcog.github.io/parallax.js/ -->
    <script src="js/imagesloaded.pkgd.min.js"></script>     <!-- https://imagesloaded.desandro.com/ -->
    <script src="js/isotope.pkgd.min.js"></script>          <!-- https://isotope.metafizzy.co/ -->
    <script src="js/jquery.magnific-popup.min.js"></script> <!-- https://dimsemenov.com/plugins/magnific-popup/ -->
    <script src="slick/slick.min.js"></script>              <!-- https://kenwheeler.github.io/slick/ -->
    <script src="js/templatemo-script.js"></script> 
</body>
</html> 
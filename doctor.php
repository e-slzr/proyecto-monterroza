<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Grupo Monterroza">
    <meta name="viewport" content="width=device-width, user scalable=no, initial-scale=1.0, minimun-scale=1.0">
    <title>Doctor - Grupo Monterroza</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
<!--    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Librerias CSS -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
  </head>

  <body>
    <header id="header" class="fixed-top">
      <div class="container">

        <div class="logo float-left">
          <a href="#intro" class="scrollto">
            <!-- encabbezado -->
                <span class="encabezado">GRUPO MONTERROZA</span>
            <!-- encabbezado -->
<!--          <img src="img/logo.png" alt="" class="img-fluid">-->
          </a>
        </div>
        <nav class="main-nav float-right d-none d-lg-block" id="sidemenu">
          <ul>
            <li class="active"><a href="index.php">Inicio</a></li>
            <li class="active"><a href="#test">Testimonios</a></li>
            <li class="active"><a href="#video">Videos</a></li>
<!-- Menu desplegable -->
<!--
            <li class="drop-down"><a href="#intro">Servicios</a>
              <ul>
                <li><a href="">Servicio 1</a></li>
                <li><a href="">Servicio 2</a></li>
                <li><a href="">Servicio 3</a></li>
                <li><a href="">Servicio 4</a></li>
              </ul>
            </li>
-->
            <li><a href="#contact" class="ancla">Contactos</a></li>

          </ul>
        </nav>
        <!-- .main-nav -->

      </div>
    </header>
	  
	  <section id="nues-servicios-import" class="clearfix" name="intro">
		  <span class="span">INFORMACION MEDICO</span>
		  <hr>
		  <section id="info-medico">
		      <div id="foto-medico">
		          <div>
		              <img src="img/icon/icon_user.svg" alt="">
		          </div>
		      </div>
		      <div id="info-medico-hijo">
		          <titulo>Nombre: </titulo>Lorem ipsum dolor sit amet.<hr>
		          <titulo>Especialidad: </titulo>Lorem ipsum dolor sit amet.<hr>
		          <titulo>Experiencia: </titulo>Lorem ipsum dolor sit amet.<hr>
		          <titulo>Otra información: </titulo>Lorem ipsum dolor sit amet.
		      </div>
		  </section>
	  </section>
	  <hr>
	  
	  
<!--SECCION TESTIMONIOS-->
	  <section id="testimonios" name="test">
		  <span>TESTIMONIOS</span>
		  <hr>
        <!--inicio de carrusel-->
            <div id="carrusel">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner"> 
                        <div class="carousel-item active carrusel-page">
                            <img src="img/bg-test.jpg" class="d-block w-100" alt="..." height="450px">
                            <div class="carousel-caption d-none d-md-block">
                                <div id="foto-test">
                                    <img src="img/icon/icon_user.svg" alt="">
                                </div>
                                <h5>Titulo de testimonio 1</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, ducimus, dolore. Maxime dicta fugit aspernatur dolorum soluta quod, corporis ea neque, pariatur vero veritatis praesentium laudantium, quos id nam assumenda!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/bg-test.jpg" class="d-block w-100" alt="..." height="450px">
                            <div class="carousel-caption d-none d-md-block">
                                <div id="foto-test"> 
                                    <img src="img/icon/icon_user.svg" alt="">
                                </div>
                                <h5>Titulo de testimonio 2</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident commodi fugiat exercitationem adipisci, blanditiis optio est ducimus labore explicabo, repellendus asperiores iste sunt aliquam voluptas amet delectus quaerat omnis ex!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/bg-test.jpg" class="d-block w-100" alt="..." height="450px">
                            <div class="carousel-caption d-none d-md-block">
                                <div id="foto-test">
                                    <img src="img/icon/icon_user.svg" alt="">
                                </div>
                                <h5>Titulo de testimonio 3</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure porro, non rem placeat cum molestiae debitis deleniti voluptas fuga, dolorem eaque facilis adipisci ullam saepe reiciendis, hic veniam id eius!</p>
                            </div>
                        </div>
                    </div>
                    
            <!--CONTROLES SIGUIENTE, ANTERIOR-->
                
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="false"></span>
                        <span class="sr-only">Next</span>
                    </a>
                
                </div>
            </div>
        <!--fin de carrusel-->
	  </section>
	  <hr name="video">


<!--SECCION VIDEOS-->
        <section id="testimonios">
            <span class="span">VIDEOS</span>
            <hr>
            <div id="videos">
                <div class="contenedor-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/X-dMOvEOQiM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="contenedor-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/jiChpw0ul_8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="contenedor-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pGbIOC83-So" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="contenedor-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/j5njNB8Cs5w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </section>
	  
<!-- #footer -->
  <?php include("footer/footer.php");?>
<!-- #footer -->


  <!-- JavaScript -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="js/animate.js"></script>

  </body>
</html>

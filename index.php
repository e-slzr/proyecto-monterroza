<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Grupo Monterroza">
    <meta name="viewport" content="width=device-width, user scalable=no, initial-scale=1.0, minimun-scale=1.0">
    <title>Inicio - Grupo Monterroza</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <!--<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
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
            <!-- encabezado -->
                <span class="encabezado">GRUPO MONTERROZA</span>
            <!-- encabbezado -->
            <!--<img src="img/logo.png" alt="" class="img-fluid">-->
          </a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block" id="sidemenu">
          <ul>
            <li class="active"><a href="#intro">Inicio</a></li>
            <li><a href="#ancla-about" class="ancla">Quienes somos</a></li>
            <li><a href="#nues-servicios" class="ancla">Servicios</a></li>
            <li><a href="#contact" class="ancla">Contactos</a></li>
          </ul>
        </nav>
        <!-- .main-nav -->

      </div>
    </header>
      
      <section id="intro" class="clearfix">
        <div class="container">

          <div class="intro-info">
            <h2>Lorem Ipsum<br><span>is simply </span><br>dummy text of the.</h2>
            <div id="sidemenu">
              <a href="#ancla-about" class="btn-get-started scrollto">Quienes somos</a>
              <a href="#nues-servicios" class="btn-services scrollto">Servicios</a>
            </div>
          </div>
             <br id="ancla-about">
        </div> 
      </section>
	  <hr>
      <section id="about">
		  <p class="text-center"><span>Quienes somos</span><br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum non iusto, architecto provident corporis labore, a expedita unde, voluptatem ad deserunt! Magnam iure eligendi, cupiditate blanditiis itaque qui velit temporibus.
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima voluptates deleniti incidunt aliquam, iste cum inventore harum velit necessitatibus laborum earum aperiam debitis eligendi, omnis cumque repellendus perferendis nemo placeat.
		  </p>
      </section>
	   
	  <hr>

	  <section id="nues-servicios">
		  <span>Nuestros servicios</span>
		  <section id="servicios" clas="col-xs-12 col-md-8 col-lg-6">
			  <div id="hijo">
                  <a href="doctor.php">
                    <div class="div-img hidden">
					<img class="img" src="img/servicio_medic.jpg" height="550px">
					<div id="texto-servicio">
<!--                        <img src="img/icon/icon_compra2.svg"height="50px">-->
					    <p>Doctor</p>
					</div>
				  </div>
                  </a>
			  </div>
			  <div id="hijo">
                  <a href="nutri.php">
                    <div class="div-img hidden">
					<img class="img" src="img/servicio_nutri.jpg" height="550px">
					<div id="texto-servicio">
<!--                        <img src="img/icon/icon_compra2.svg"height="50px">-->
					    <p>Nutrilite</p>
					</div>
				  </div>
                  </a>
			  </div>
			  <div id="hijo">
			      <a href="import.php">
			          <div class="div-img hidden" >
			              <img class="img" src="img/servicio_1.jpg" height="550px">
                          <div id="texto-servicio">
<!--                          <img src="img/icon/icon_reparacion.svg"height="50px">-->
                          <p>Importadora y taller</p>
                            </div>
				      </div>
			      </a>
			  </div>
			  <div id="hijo">
             <a href="pvc.php">
                 <div class="div-img hidden" >
					<img class="img" src="img/servicio_pvc.jpg" height="550px">
				  	<div id="texto-servicio">
<!--                        <img src="img/icon/icon_listo2.svg"height="50px">-->
                        <p>Estructuras en PVC</p>
					</div>
				  </div>
             </a>
			  </div>
			  <div id="hijo">
                 <a href="madera.php">
                     <div class="div-img hidden" >
                        <img class="img" src="img/servicio_made.jpg" height="550px">
                        <div id="texto-servicio">
    <!--                        <img src="img/icon/icon_taller.svg"height="50px">-->
                            <p>Estructuras en Madera</p>
                        </div>
				      </div>
                 </a>
			     
			  </div>
		  </section>
	  </section>
	  
	  <hr>
	  
<!-- #footer -->
      <?php include('footer/footer.php')?>
<!-- #footer -->
      
<!--      <div id="preloader"></div>-->
    
  <!-- JavaScript -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/preloader.js"></script>
  <!-- Contact Form JavaScript File -->

  </body> 
</html> 

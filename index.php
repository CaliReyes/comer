<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Beckenbauer</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.4.0/css/font-awesome.css">
	<link rel="stylesheet" href="css/styleparallax.css">
	<link rel="stylesheet" type="text/css" href="css/estilos1.css">
</head>
<body>

	<?php include('barraMenu.php'); ?>
	<section id="home" data-type = "parallax_section" data-speed="10">
    <header>
        <div class="container"><br><br><br>
            <div class="intro-text">
            <img src="img/logob.png" class="img-responsive logosize" alt="">
                <div class="intro-lead-in">Calzados Beckenbauer.</div>
                <div class="intro-heading">Bienvenido a nuestra tienda online!</div>
                <a href="newuser.php" class="page-scroll btn btn-xl">Crea tu cuenta</a>
            </div>
        </div>
    </header>
	</section>
	<!-- movies wall 
    ================================================== -->
    <section id="section2" data-type = "parallax_section" data-speed="10">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li class="" data-target="#myCarousel" data-slide-to="1"></li>
        <li class="active" data-target="#myCarousel" data-slide-to="2"></li>
        <li class="" data-target="#myCarousel" data-slide-to="3"></li>
        <li class="" data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item">
          <center><img src="img/barra1.jpg" alt="First slide"></center>
          <div class="container">
            <div class="carousel-caption">
              <h1>Zapato uno</h1>
              <p id="nav-tex">...</p>
              <p><a class="btn btn-lg btn-info" href="producto.php" role="button">Ver</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <center><img src="img/barra2.jpg" alt="Second slide"></center>
          <div class="container">
            <div class="carousel-caption">
              <h1>Zapato dos</h1>
              <p>...</p>
              <p><a class="btn btn-lg btn-info" href="producto.php" role="button">Ver</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <center><img src="img/barra3.jpg" alt="Second slide"></center>
          <div class="container">
            <div class="carousel-caption">
              <h1>Zapato tres</h1>
              <p>...</p>
              <p><a class="btn btn-lg btn-info" href="producto.php" role="button">Ver</a></p>
            </div>
          </div>
        </div>
        
        <div class="item">
          <center><img src="img/barra4.jpg" alt="Second slide"></center>
          <div class="container">
            <div class="carousel-caption">
              <h1>Zapato cuatro</h1>
              <p>...</p>
              <p><a class="btn btn-lg btn-info" href="producto.php" role="button">Ver</a></p>
            </div>
          </div>
        </div>
        <div class="item active">
          <center><img src="img/barra5.jpg" alt="Third slide"></center>
          <div class="container">
            <div class="carousel-caption">
              <h1>Zapato cinco</h1>
              <p>...</p>
              <p><a class="btn btn-lg btn-info" href="producto.php" role="button">Ver</a></p>
            </div>
          </div>
        </div>
        
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- /movies wall -->
	</section>
	<!-- SECTION 25 
    ================================================== -->
    <!-- Sección portafolio-->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="">Articulos</h2>
                    <h3 class="section-subheading text-muted">Mira algunos de nuestros nuevos articulos.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portafolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Zapato uno</h4>
                        <p class="text-muted">$99</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portafolio/startup-framework.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Zapato dos</h4>
                        <p class="text-muted">$85</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portafolio/treehouse.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Zapato tres</h4>
                        <p class="text-muted">$80</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portafolio/golden.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Zapato cuatro</h4>
                        <p class="text-muted">$77</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portafolio/escape.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Zapato cinco</h4>
                        <p class="text-muted">$100</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portafolio/dreams.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Zapato seis</h4>
                        <p class="text-muted">$39</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /SECTION25 
    ================================================== -->
	
	<section id="section3" data-type = "parallax_section" data-speed="10">
		<!-- Sección portafolio-->
		 <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contactanos</h2>
                    <h3 class="section-subheading text-muted">Llena este formulario 
                    para que estemos en contacto.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Tu nombre *" id="name" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Tu Email *" id="email" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Tu Teléfono *" id="phone" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Tu Mensaje *" id="message" required></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	</section><br><br>
	
	

	<div class="container">	
	
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
		$('section[data-type="parallax_section"]').each(function(){
			var $bgobjeto = $(this);
			$(window).scroll(function(){
				$window = $(window);
				var yPos = -($window.scrollTop() / $bgobjeto.data('speed'));
				var coords = '50%' + yPos + 'px';
				$bgobjeto.css({backgroundPosition: coords});
			});
		});
	});
	</script>
</body>
<!--Pie de página-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; undead nightmare studios 2015</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Politicas de privacidad</a>
                        </li>
                        <li><a href="#">Terminos de uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portafolio Modals -->
    

    <!-- Portafolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Detalles del proyecto-->
                            <h2>Zapato uno</h2>
                            <p class="item-intro text-muted">$90.</p>
                            <img class="img-responsive" src="img/portafolio/roundicons-free.png" alt="">
                            <p>Descripción del zapato......!</p>
                            <p>
                                <strong>¿Quieres tener estos zapatos?</strong> Puedes encargarlos <a href="producto.php">aqui</a> y nosotros lo envíamos hasta tu casa.</p>
                            <ul class="list-inline">
                                <li>Fecha: Agosto 2015</li>
                                <li>Categoria: Calzado</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Poratfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Zapato dos</h2>
                            <p class="item-intro text-muted">$90.</p>
                            <img class="img-responsive" src="img/portafolio/startup-framework-preview.png" alt="">
                            <p>Descripción del zapato......!</p>
                            <p>
                                <strong>¿Quieres tener estos zapatos?</strong> Puedes encargarlos <a href="producto.php">aqui</a> y nosotros lo envíamos hasta tu casa.</p>
                            <ul class="list-inline">
                                <li>Fecha: Agosto 2015</li>
                                <li>Categoria: Calzado</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portafolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Detalles del proyecto -->
                            <h2>Zapato tres</h2>
                            <p class="item-intro text-muted">$90.</p>
                            <img class="img-responsive" src="img/portafolio/treehouse-preview.png" alt="">
                            <p>Descripción del zapato......!</p>
                            <p>
                                <strong>¿Quieres tener estos zapatos?</strong> Puedes encargarlos <a href="producto.php">aqui</a> y nosotros lo envíamos hasta tu casa.</p>
                            <ul class="list-inline">
                                <li>Fecha: Agosto 2015</li>
                                <li>Categoria: Calzado</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portafolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Detalles de proyecto -->
                            <h2>Zapato cuatro</h2>
                            <p class="item-intro text-muted">$90.</p>
                            <img class="img-responsive" src="img/portafolio/golden-preview.png" alt="">
                            <p>Descripción del zapato......!</p>
                            <p>
                                <strong>¿Quieres tener estos zapatos?</strong> Puedes encargarlos <a href="producto.php">aqui</a> y nosotros lo envíamos hasta tu casa.</p>
                            <ul class="list-inline">
                                <li>Fecha: Agosto 2015</li>
                                <li>Categoria: Calzado</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portafolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Detalles del proyecto -->
                            <h2>Zapato cinco</h2>
                            <p class="item-intro text-muted">$90.</p>
                            <img class="img-responsive" src="img/portafolio/escape-preview.png" alt="">
                            <p>Descripción del zapato......!</p>
                            <p>
                                <strong>¿Quieres tener estos zapatos?</strong> Puedes encargarlos <a href="producto.php">aqui</a> y nosotros lo envíamos hasta tu casa.</p>
                            <ul class="list-inline">
                                <li>Fecha: Agosto 2015</li>
                                <li>Categoria: Calzado</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portafolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Detalles del proyecto -->
                            <h2>Zapato seis</h2>
                            <p class="item-intro text-muted">$90.</p>
                            <img class="img-responsive" src="img/portafolio/dreams-preview.png" alt="">
                            <p>Descripción del zapato......!</p>
                            <p>
                                <strong>¿Quieres tener estos zapatos?</strong> Puedes encargarlos <a href="producto.php">aqui</a> y nosotros lo envíamos hasta tu casa.</p>
                            <ul class="list-inline">
                                <li>Fecha: Agosto 2015</li>
                                <li>Categoria: Calzado</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FIN MODAL-->
</html>
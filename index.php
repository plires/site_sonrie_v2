<?php
	
	require ('includes/config.inc.php');
  include_once('includes/soporte.php');

  $current = 'home';

  //Variables Get
  include_once('includes/get-variable-handling.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="En la Fundación Sonríe la Vida buscamos contribuir para que los tratamientos centrados en la Longevidad y el Bienestar Emocional sean accesibles para todos, sin importar su edad, origen, raza, estatus social/económico o género.">
	<title>Buscamos que vivas Intensamente - sonrie la vida</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

	<link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css"/>
	<link rel="stylesheet" type="text/css" href="./node_modules/slick-slider/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="./node_modules/slick-slider/slick/slick-theme.css"/>
	<link rel="stylesheet" href="./css/app.css">
</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido HOME -->
	<section id="app" class="home">

		<!-- Modal Confirmation -->
		<?php include('./includes/modal-confirmation-donation.php'); ?>

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Slide Home -->
		<section id="first_section" class="container-fluid slide_home">
			<div class="row">
				<div class="col-md-12">
					
					<div id="slideHomeIndicators" class="carousel slide" data-bs-ride="carousel">

					  <div class="carousel-indicators">
					    <button type="button" data-bs-target="#slideHomeIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					    <button type="button" data-bs-target="#slideHomeIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					    <button type="button" data-bs-target="#slideHomeIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					  </div>

					  <div class="carousel-inner">

					    <div id="slide_a" class="carousel-item active">
					      <div class="row">
					      	<div class="col-lg-6 img"></div>
					      	<div class="col-lg-6 txt">
					      		<h1>Estrechamos lazos entre todas las organizaciones voluntarias para, entre todos, ayudarnos a ayudar y dar cada día más!!</h1>
					      	</div>
					      </div>
					    </div>

					    <div id="slide_b" class="carousel-item">
					      <div class="row">
					      	<div class="col-lg-6 img"></div>
					      	<div class="col-lg-6 txt">
					      		<h2>Encontrá tu motivo <br>para existir.</h2>
					      	</div>
					      </div>
					    </div>

					    <div id="slide_c" class="carousel-item">
					      <div class="row">
					      	<div class="col-lg-6 img"></div>
					      	<div class="col-lg-6 txt">
					      		<h2>Buscando nuevas <br>formas de ayudar!</h2>
					      	</div>
					      </div>
					    </div>

					  </div>

					  <button class="carousel-control-prev" type="button" data-bs-target="#slideHomeIndicators" data-bs-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Previous</span>
					  </button>

					  <button class="carousel-control-next" type="button" data-bs-target="#slideHomeIndicators" data-bs-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Next</span>
					  </button>

					</div>
				</div>
			</div>
		</section>
		<!-- Slide Home end -->

		<!-- Tecnología en Manos -->
		<section class="container tecnologia_en_manos">
	  	<div class="row">

		  	<div class="col-lg-12">

		  		<div data-aos="fade-up" class="content">
		        <h2>Ponemos la tecnología en manos de quienes más lo necesitan.</h2>
		        <div class="row">
		        	<div class="col-lg-6">
		        		<p>
		        			En la Fundación Sonríe la Vida buscamos <strong>crear vínculos y puentes</strong> que puedan llevar tecnología de avanzada al <strong>tercer sector</strong>, con el único objetivo de contribuir para que los tratamientos centrados en la <strong>Salud, Longevidad y el Bienestar Emocional</strong> sean accesibles para todos, sin importar su edad, origen, raza, estatus socioeconómico o género. 
		        		</p>
		        	</div>
		        	<div class="col-lg-6">
		        		<p>
		        			Esto lo logramos mediante diversas acciones, por un lado contamos con nuestro propio centro de Investigación y Desarrollo de vanguardia en el cual realizamos desarrollos tecnológicos sobre el envejecimiento y el equilibrio emocional; por otro lado creamos vínculos entre individuos o corporaciones que crean innovaciones tecnológicas en el campo de la salud y lo acercamos a las personas u otras fundaciones del tercer sector. 
		        		</p>
		        	</div>
		        </div>
		        <a href="quienes-somos.php" class="cta transition">Conocé más <i class="fa-solid fa-arrow-right-long transition"></i></a>
		  		</div>

		  	</div>

	  	</div>
		</section>
		<!-- Tecnología en Manos end -->

		<!-- Programas -->
		<section class="container-fluid programas">

			<div class="container">
	  		<div class="row">

			  	<div class="col-md-10 offset-md-1">

			  		<div data-aos="fade-up" class="content_img">
		        	<img class="img-fluid img" src="./img/home/grados-bienestar.png" alt="grados bienestar">
			  		</div>
		        
		        <p data-aos="fade-up" class="description">
		        	Los sentimientos de bienestar personal son fundamentales para nuestra salud en general, permitiéndonos superar las dificultades y lograr las cosas que queremos en la vida. Nos debemos a nosotros mismos vivir nuestras vidas al máximo mientras tenemos la oportunidad, pero a veces podemos necesitar un poco de ayuda para hacerlo.
		        </p>

		        <div class="row">
		        	
		        	<div data-aos="fade-up" class="col-lg-4">
		        		<div class="number_one">1</div>
		        		<div class="content">
		        			<h3>Primer Grado</h3>
		        			<p class="description_grado">
		        				 Impacto en las necesidades básicas individuales
		        			</p>
		        			<a href="que-hacemos.php#grados_bienestar" class="btn btn-primary">ver más</a>
		        		</div>
		        	</div>

		        	<div data-aos="fade-up" class="col-lg-4">
		        		<div class="number_two">2</div>
		        		<div class="content">
		        			<h3>Segundo Grado</h3>
		        			<p class="description_grado">
		        				  Impacto en las necesidades sociales 
		        			</p>
		        			<a href="que-hacemos.php#grados_bienestar" class="btn btn-primary">ver más</a>
		        		</div>
		        	</div>

		        	<div data-aos="fade-up" class="col-lg-4">
		        		<div class="number_three">3</div>
		        		<div class="content">
		        			<h3>Tercer Grado</h3>
		        			<p class="description_grado">
		        				  Impacto en las necesidades emocionales y espirituales
		        			</p>
		        			<a href="que-hacemos.php#grados_bienestar" class="btn btn-primary">ver más</a>
		        		</div>
		        	</div>

		        </div>

			  	</div>

		  	</div>

			</div>
		</section>
		<!-- Programas end -->

		<!-- Tecnologías Para un Mundo Mejor -->
		<section class="container tecnologias_mundo_mejor">
	  	<div class="row">

		  	<div data-aos="fade-up" class="col-md-12">
		  		<h2>Tecnologías para un mundo mejor.</h2>		        
		  	</div>

		  	<div data-aos="fade-up" class="col-md-6 programa_cooperacion">
		  		<h3>Programa de<br>cooperación</h3>
		  		<a href="que-hacemos.php" class="cta transition">Conocé más <i class="fa-solid fa-arrow-right-long transition"></i></a>
		  	</div>

		  	<div data-aos="fade-up" class="col-md-6 centro_desarrollo">
		  		<h3>Centro de<br>investigación y<br>desarrollo</h3>
		  		<a href="investigacion.php" class="cta transition">Conocé más <i class="fa-solid fa-arrow-right-long transition"></i></a>
		  	</div>

	  	</div>
		</section>
		<!-- Tecnologías Para un Mundo Mejor end -->

		<!-- Ayuda y Doná -->
		<section class="container-fluid ayuda_dona">
			<div class="container">
	  		<div class="row">
		  		<!-- Modulo Donación -->
					<?php include_once('./includes/donation-module.php'); ?>
		  	</div>
			</div>
		</section>
		<!-- Ayuda y Doná end -->

		<!-- Contacto -->
		<section class="container-fluid contacto">
			<div class="container">
	  		<div class="row">
	  			<!-- Formulario -->
					<?php include_once('./includes/form-module.php'); ?>
	  		</div>
			</div>
		</section>
		<!-- Contacto end -->

		<!-- Clientes -->
		<section data-aos="fade-up" class="container-fluid clientes">
			<div class="row">
				
				<div class="col-md-12 content_logos">
					<img src="./img/home/logos-clientes/hospital-militar.jpg" alt="logo hospital militar">
					<img src="./img/home/logos-clientes/boca.jpg" alt="logo boca">
					<img src="./img/home/logos-clientes/river.jpg" alt="logo river">
					<img src="./img/home/logos-clientes/uai.jpg" alt="logo uai">
					<img src="./img/home/logos-clientes/cifal.jpg" alt="logo cifal">
					<img src="./img/home/logos-clientes/unitar.jpg" alt="logo unitar">
					<img src="./img/home/logos-clientes/fuerzas-armadas.jpg" alt="logo fuerzas-armadas">
					<img src="./img/home/logos-clientes/municipalidad-suipacha.jpg" alt="logo municipalidad-suipacha">
					<img src="./img/home/logos-clientes/istec.jpg" alt="logo istec">
					<img src="./img/home/logos-clientes/ministerio-desarrollo.jpg" alt="logo ministerio-desarrollo">
					<img src="./img/home/logos-clientes/ospatrones.jpg" alt="logo ospatrones">
					<img src="./img/home/logos-clientes/meta.jpg" alt="logo meta">
					<img src="./img/home/logos-clientes/punto.jpg" alt="logo punto">
					<img src="./img/home/logos-clientes/handball.jpg" alt="logo handball">
				</div>

			</div>
		</section>
		<!-- Clientes end -->

	</section>
	<!-- Contenido HOME end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script type="text/javascript" src="./node_modules/vue/dist/vue.js"></script>
	<script type="text/javascript" src="./node_modules/axios/dist/axios.min.js"></script>
	<script type="text/javascript" src="./node_modules/slick-slider/slick/slick.min.js"></script>
	<script src="js/vue-instance.js"></script>
	<script type="text/javascript" src="./js/app.js"></script>
	<script src="js/formsContact.js"></script>

</body>

</html>
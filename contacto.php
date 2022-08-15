<?php
	
	require ('includes/config.inc.php');
  include_once('includes/soporte.php');

  $current = 'contacto';

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
	<meta name="description" content="contactate con nuestra Fundación Sonrie la Vida.">
	<title>Contacto - Sonrie la Vida</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

	<link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css"/>
	<link rel="stylesheet" href="./css/app.css">
</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Contenido CONTACTO -->
	<section id="app" class="quienes section_contacto">

		<!-- Modal Confirmation -->
		<?php include('./includes/modal-confirmation-donation.php'); ?>

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Pos Header -->
		<section id="first_section" class="container-fluid pos_header">
	  	<div class="row">

		  	<div class="col-lg-7 img">
	        <img class="img-fluid" src="./img/contacto/slide-contacto.jpg" alt="slide contacto fundacion sonrie la vida">
		  	</div>

		  	<div class="col-lg-5 data">
	        <h2 data-aos="fade-up">Construyamos el futuro <br><span class="outline">juntos</span></h2>
		  	</div>

	  	</div>
		</section>
		<!-- Pos Header end -->

		<!-- Donación -->
		<section class="container-fluid ayuda_dona donacion">
			<div class="container">
	  		<div class="row">
		  		<!-- Modulo Donación -->
					<?php include_once('./includes/donation-module.php'); ?>
		  	</div>
			</div>
		</section>
		<!-- Donación end -->

		<!-- Contacto -->
		<section class="container-fluid contacto formulario_contacto">
			<div class="container">
	  		<div class="row">
	  			<!-- Formulario -->
					<?php include_once('./includes/form-module.php'); ?>
	  		</div>
			</div>
		</section>
		<!-- Contacto end -->

	</section>
	<!-- Contenido CONTACTO end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script type="text/javascript" src="./node_modules/vue/dist/vue.js"></script>
	<script type="text/javascript" src="./node_modules/axios/dist/axios.min.js"></script>
	<script src="js/vue-instance.js"></script>
	<script type="text/javascript" src="./js/app.js"></script>
	<script src="js/formsContact.js"></script>

</body>

</html>
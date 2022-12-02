<?php
	
	require ('./includes/config.inc.php');
  include_once('./includes/soporte.php');

  $current = 'campañas';
  $campaign = 'fiel_compañero';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Para estos Reyes Magos queremos llevar sonrisas a los chicos que se encuentran en Cuidados Paliativos del Hospital de Niños Gutiérrez con una sorpresa inolvidable! ">
	<title>Campañas - Fiel Compañero</title>

	<!-- Favicons -->
	<?php include('./includes/favicon.php'); ?>

	<link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css"/>
	<link rel="stylesheet" href="./css/app.css">
</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Campaña Fiel Compañero -->
	<section id="app" class="campaign_fiel_compa">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Contenido Campaña -->
		<section id="first_section" class="container-fluid campaign">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<h1 data-aos="fade-up">Fiel Compañero</h1>	
					</div>

					<div class="col-md-6 content_img">
						<img data-aos="fade-up" class="img-fluid big_boy" src="./img/campaigns/fiel-companero/big-boys.png" alt="big boys">
					</div>
					<div data-aos="fade-up" class="col-md-6 content_data">

						<div class="content_frase">
							<p data-aos="fade-up">
								<span>
									Para estos Reyes Magos queremos llevar sonrisas a los chicos que se encuentran en Cuidados Paliativos del Hospital de Niños Gutiérrez con una sorpresa inolvidable!
								</span>
							</p>
							<p data-aos="fade-up">
								Vamos a repartir muñecos Big Boys personalizados a cada uno de los niños del ala, compartiendo sonrisas y un día lleno de diversión.
							</p>
							<p data-aos="fade-up">
								Organizamos una subasta de Big Boys NFT únicos, diseñados e intervenidos por 10  artistas Argentinos y gracias al aporte de Fyre Community Studio sumamos más piezas para hacer de esta campaña algo inolvidable.
							</p>
							<p data-aos="fade-up">
								Con lo recaudado le regalaremos un Fiel Compañero a los chicos del Hospital Gutierrez.
							</p>
							<p data-aos="fade-up">
								¿Querés colaborar con la campaña? Hacé click en el botón de abajo.
							</p>
							<div class="text-center">
								<a href="ventas-campaign-fiel-companero.php" class="btn btn-primary">Regalá Sonrisas</a>
							</div>
						</div>

						<div class="content_logos">
							<img class="img-fluid" src="./img/campaigns/fiel-companero/hospital-gutierrez-sm.png" alt="logo hospital gutierrez">
							<img class="img-fluid" src="./img/campaigns/fiel-companero/fire-community.png" alt="logo fire community">
							<img class="img-fluid" src="./img/campaigns/fiel-companero/logo-3-sm.png" alt="logo 3">
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- Contenido Campaña end -->

	</section>
	<!-- Campaña Fiel Compañero end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script type="text/javascript" src="./js/app.js"></script>

</body>

</html>
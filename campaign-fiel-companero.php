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
								<span>Para estos Reyes Magos queremos regalarle sonrisas a los chicos que se encuentran internados en el Hospital General de Niños R. Gutiérrez dándoles un muñeco Big Boy personalizado!</span>
							</p>

							<p data-aos="fade-up">
								Buscamos una forma distinta de recaudar fondos para la campaña y nos propusimos difundir y vender obras de arte físicas y digitales donde lo recaudado se destinará a la producción de los muñecos junto a un kit de regalo.
							</p>

							<p data-aos="fade-up">
								Con la colaboración y compromiso de 10 artistas argentinos que se sumaron creando cuadros de Big Boys y Fyre Community Studio que nos donó NFTs, logramos crear una colección de más de 100 piezas únicas.
							</p>

							<p data-aos="fade-up">
								Junto a la Cooperadora del Hospital General de Niños R. Gutiérrez queremos contagiar sonrisas y regalarle unos Reyes Magos diferentes a los chicos!
							</p>

							<p data-aos="fade-up">
								Regalemos sonrisas y unos Reyes Magos diferentes a los chicos!
							</p>

							<p data-aos="fade-up">
								<strong>¿Querés colaborar con la campaña? Hacé click en el siguiente botón.</strong>
							</p>						

							<div class="text-center">
								<a href="ventas-campaign-fiel-companero.php" class="btn btn-primary">Regalá Sonrisas</a>
							</div>
						</div>

						<div class="content_logos">
							<img class="img-fluid" src="./img/campaigns/fiel-companero/fire-community.png" alt="logo fire community">
							<img class="img-fluid featured" src="./img/campaigns/fiel-companero/logo-coperadora.png" alt="logo cooperadora">
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
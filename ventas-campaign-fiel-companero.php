<?php
	
	require ('./includes/config.inc.php');
  include_once('./includes/soporte.php');

  $current = 'campañas';
  $campaign = 'fiel_compañero';

  //Variables Get
  include_once('./includes/get-variable-handling.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Compra y ayuda con esta causa. Para estos Reyes Magos queremos llevar sonrisas a los chicos que se encuentran en Cuidados Paliativos del Hospital de Niños Gutiérrez con una sorpresa inolvidable! ">
	<title>Campañas - Acción Fiel Compañero</title>

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

	<!-- Venta Campaña Fiel Compañero -->
	<section id="app" class="venta_campaign_fiel_compa">

		<!-- <div id="loading" class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
		  <span class="visually-hidden">Cargando...</span>
		</div> -->

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Modal Products -->
		<?php include_once('./includes/campaigns/fiel-companiero/modal-products.php'); ?>

		<!-- Modal Faq -->
		<?php include_once('./includes/campaigns/fiel-companiero/modal-faq-fiel-companiero.php'); ?>

		<!-- Header Campaña -->
		<section id="first_section" class="container-fluid header_campaña">
			<div class="row">
				<div class="col-md-12 p-0">
					<img class="img-fluid img_header" src="./img/campaigns/fiel-companero/header-mobile-mod.jpg" alt="header fiel compañero">
				</div>
			</div>
		</section>
		<!-- Header Campaña end -->

		<!-- Descripción Campaña -->
		<section class="container description">
			<div class="row">
				<div class="col-md-10 offset-md-1 text-center">
					<h1>Regalando Sonrisas</h1>
					<p data-aos="fade-up">
						<strong>Para estos Reyes Magos queremos regalarle sonrisas a los chicos que se encuentran internados en el Hospital General de Niños R. Gutiérrez dándoles un muñeco Big Boy personalizado!</strong>
					</p>

					<p data-aos="fade-up">
						Buscamos una forma distinta de recaudar fondos para la campaña y nos propusimos difundir y vender obras de arte físicas y digitales donde lo recaudado se destinará a la producción de los muñecos junto a un kit de regalo.
					</p>

					<p data-aos="fade-up">
						Con la colaboración y compromiso de 10 artistas argentinos que se sumaron creando cuadros de Big Boys y Fyre Community Studio que nos donó NFTs, logramos crear una colección de más de 100 piezas únicas.
					</p>

					<p data-aos="fade-up">
						Sabemos que no todos tenemos acceso a plataformas como Open Sea o una billetera virtual, por eso creamos una plataforma única y personalizada para esta campaña, así todos pueden ayudar y acceder a la compra de los NFT pagando a través de Mercado Pago.
					</p>

					<p data-aos="fade-up">
						Para poder vender los NFT y darles a los chicos unos Reyes Magos diferentes necesitamos de tu ayuda ❤️
					</p>

					<p data-aos="fade-up">
						Junto a la Cooperadora del Hospital General de Niños R. Gutiérrez queremos contagiar sonrisas y regalarle unos Reyes Magos diferentes a los chicos!
					</p>
					
					<hr>

					<p data-aos="fade-up">
						¿Tenés preguntas? <a href="#" data-bs-toggle="modal" data-bs-target="#modalFaqFielCompaniero">consulta aquí</a>
					</p>
					
					<hr>

				</div>
			</div>
			<div class="row filtros">
				<div class="col-md-6 offset-md-3 content_buttons">
					<button 
						@click="setCategory('Cuadros')" 
						id="btn_cuadros" 
						:class="['btn btn-primary', currentCategory == 'Cuadros' ? 'active' : '']">
						CUADROS
					</button>
					<button 
						@click="setCategory('NFT')" 
						id="btn_nft" class="btn btn-primary"
						:class="['btn btn-primary', currentCategory == 'NFT' ? 'active' : '']">
						NFTs
					</button>
				</div>
		</div>
		</section>
		<!-- Descripción Campaña end -->

		<!-- Section Cuadros -->
		<section v-if="currentCategory === 'Cuadros'" class="container productos cuadros">

			<div class="row">
				<div class="col-md-10 offset-md-1 text-center">
					<h2>Cuadros</h2>
					<p>
						<strong>Convocamos a diez artistas argentinos a ser parte de la campaña creando piezas físicas de arte únicas con los Big Boys como ejes centrales en la obra.</strong>
					</p>

					<p>
						Buscamos la expresión y la libertad como disparadores de las obras de arte, dando lugar a que cada artista cree en base a su experiencia, técnica, estilo y más! 
					</p>

					<p>
						Estas obras también se pueden encontrar digitalizadas en formato NFT! Es por eso que al comprar un cuadro físico también comprás el cuadro en formato digital o NFT. 
					</p>	
				</div>
			</div>

			<div class="row">
				<div class="col-6 col-md-4 col-lg-3" v-for="(picture, index) in pictures" :key="index">
					<div class="content_product">
						<div v-if="picture.available == 0" class="sold">
							<img 
								class="img-fluid" src="./img/campaigns/fiel-companero/vendido.png" :alt="picture.name + ' - vendido'">
						</div>
						<img 
							class="img-fluid img_product_list" 
							@click="setCurrentProduct(picture.id)" 
							data-bs-toggle="modal" 
							data-bs-target="#modalProducts"
							:src="'./img/campaigns/fiel-companero/cuadros/' + picture.image" 
							:alt="picture.name + ' - ' + picture.id">
					</div>
					<p class="text-center value_product">{{picture.valueFormat}}</p>
					<div class="text-center">
						<button 
							v-if="picture.available == 1" 
							type="button" 
							@click="setCurrentProduct(picture.id)"
							class="btn btn-primary" 
							data-bs-toggle="modal" 
							data-bs-target="#modalProducts">
						  Ver Más
						</button>
					</div>
					<input type="hidden" :value="picture.value">
				</div>
			</div>

		</section>
		<!-- Section Cuadros -->

		<!-- Section NFT -->
		<section v-if="currentCategory === 'NFT'" class="container productos nft">

			<div class="row">
				<div class="col-md-10 offset-md-1 text-center">
					<h2>Big Boy Art</h2>
					<p>
						<strong>BIG BOYS ART es la primera colección de NFTS de MOMENTS ART STUDIO realizado para FIRE COMMUNITY.
						Una colección divertida y sin prejuicios con el objetivo de transmitir y difundir que todos somos iguales y representa el no al racismo, el no al bullying, el sí a la solidaridad y a la libre expresión.</strong>
					</p>

					<p>Los BIG BOY ART representan la libertad y solidaridad en su máxima expresión.</p>

					<p>
						Este proyecto está ligado directamente con muchas acciones benéficas que se realizan por medio de la fundación SONRÍE LA VIDA.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-6 col-md-4 col-lg-3" v-for="(nft, index) in nfts" :key="index">
					<div class="content_product">
						<div v-if="nft.available == 0" class="sold">
							<img 
								class="img-fluid" src="./img/campaigns/fiel-companero/vendido.png" :alt="nft.name + ' - vendido'">
						</div>
						<img 
							class="img-fluid img_product_list" 
							@click="setCurrentProduct(nft.id)" 
							data-bs-toggle="modal" 
							data-bs-target="#modalProducts"
							:src="'./img/campaigns/fiel-companero/nft/' + nft.image" 
							:alt="nft.name + ' - ' + nft.id">
					</div>
					<p class="text-center value_product">{{nft.valueFormat}}</p>
					<div class="text-center">
						<button 
							v-if="nft.available == 1" 
							type="button" 
							@click="setCurrentProduct(nft.id)"
							class="btn btn-primary" 
							data-bs-toggle="modal" 
							data-bs-target="#modalProducts">
						  Ver Más
						</button>
					</div>
					<input type="hidden" :value="nft.value">
				</div>
			</div>

		</section>
		<!-- Section NFT -->

	</section>
	<!-- Venta Campaña Fiel Compañero end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="./node_modules/aos/dist/aos.js"></script>
	<script src="./node_modules/vue/dist/vue.js"></script>
	<script src="./node_modules/axios/dist/axios.min.js"></script>
	<script src="./js/vue-campaign.js"></script>
	<script src="./js/app.js"></script>

</body>

</html>
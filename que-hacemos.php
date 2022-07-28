<?php
	
	require ('includes/config.inc.php');
  include_once('includes/soporte.php');

  $current = 'que_hacemos';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Nuestro principal objetivo desde la Fundación es la generación de puentes que ayuden a acortar la brecha existente entre el acceso a las tecnologías de avanzada y las personas de escasos recursos y lograr cambios positivos en la sociedad.">
	<title>Que Hacemos - Sonrie la Vida</title>

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

	<!-- Contenido QUE HACEMOS -->
	<section id="app" class="transition hacemos">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Pos Header -->
		<section id="first_section" class="container pos_header">
			<div class="row">
				<div class="col-md-5">
					<h1>¿Cómo creamos los <br><span>puentes de igualdad</span> <br>tecnológica?</h1>
				</div>
				<div class="col-md-7">
					<img class="img-fluid" src="./img/que-hacemos/slide-que-hacemos.png" alt="sectores sonrie la vida">
				</div>
			</div>
		</section>
		<!-- Pos Header end -->

		<!-- Como Cooperamos -->
		<section class="container-fluid cooperamos">
			<div class="container">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<div class="row">
							<div class="col-md-12">
								<h2 data-aos="fade-up">¿Cómo cooperamos<br>con nuestro trabajo?</h2>
							</div>
							<div class="col-md-6">
								<p data-aos="fade-up">
									Nuestro principal objetivo desde la Fundación es la generación de puentes que ayuden a acortar la brecha existente entre el acceso a las tecnologías de avanzada y las personas de escasos recursos y lograr cambios positivos en la sociedad.
								</p>
								<p data-aos="fade-up">
									Para lograr esto primero debemos entender que el Bienestar es "un estado de satisfacción personal, de comodidad y de confort que considera como positivos y/o adecuados aspectos como la salud o bienestar psico-biológico, el éxito social y económico, el éxito profesional, el placer personal, la alegría de vivir, la armonía consigo mismo y con el entorno."
								</p>
							</div>
							<div class="col-md-6">
								<p data-aos="fade-up">
									El bienestar social se expresa en diferentes aspectos de la vida social de la población: en el acceso a la educación, la salud, la alimentación, la vivienda o los bienes de consumo, entre otras cosas. Es justamente por eso que hemos armado los grados de bienestar que debemos comprender para saber cómo y con que aportar:
								</p>
								<p data-aos="fade-up" class="grados">
									LOS TRES GRADOS DE BIENESTAR SEGÚN NUESTRA INSTITUCIÓN 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Como Cooperamos end -->

		<!-- Grados -->
		<section class="container grados">

  		<div class="row">

		  	<div class="col-md-10 offset-md-1">

		  		<div data-aos="fade-up" class="content_img">
	        	<img class="img-fluid img" src="./img/home/grados-bienestar.png" alt="grados bienestar">
		  		</div>
	        
	        <p data-aos="fade-up" class="description">
	        	Los sentimientos de bienestar personal son fundamentales para nuestra salud en general, permitiéndonos superar las dificultades y lograr las cosas que queremos en la vida. Nos debemos a nosotros mismos vivir nuestras vidas al máximo mientras tenemos la oportunidad, pero a veces podemos necesitar un poco de ayuda para hacerlo.
	        </p>

	        <div class="row">
	        	
	        	<div class="col-md-4">
	        		<div class="content">
	        			<img data-aos="fade-up" class="img-fluid" src="./img/que-hacemos/g1.jpg" alt="grado 1 de bienestar - sonrie la vida">
	        			<div class="data">
		        			<h3 data-aos="fade-up">G1</h3>
		        			<p data-aos="fade-up" class="description_grado">
		        				 Lograr el acceso a la educación, la salud, la alimentación, la vivienda o los bienes de consumo, entre otras cosas. 
		        			</p>
	        			</div>
	        		</div>
	        	</div>

	        	<div class="col-md-4">
	        		<div class="content">
	        			<img data-aos="fade-up" class="img-fluid" src="./img/que-hacemos/g2.jpg" alt="grado 2 de bienestar - sonrie la vida">
	        			<div class="data">
		        			<h3 data-aos="fade-up">G2</h3>
		        			<p data-aos="fade-up" class="description_grado">
		        				 Lograr el incremento o mejora en la calidad de vida en aspectos físicos, mentales, emocionales y sociales. 
		        			</p>
	        			</div>
	        		</div>
	        	</div>

	        	<div class="col-md-4">
	        		<div class="content">
	        			<img data-aos="fade-up" class="img-fluid" src="./img/que-hacemos/g3.jpg" alt="grado 3 de bienestar - sonrie la vida">
	        			<div class="data">
		        			<h3 data-aos="fade-up">G3</h3>
		        			<p data-aos="fade-up" class="description_grado">
		        				 Lograr vivir Intensamente, es la integración completa de los estados de bienestar físico, mental y espiritual. 
		        			</p>
		        		</div>
	        		</div>
	        	</div>

	        </div>

		  	</div>

	  	</div>

		</section>
		<!-- Grados end -->

		<!-- Programa de Cooperación -->
		<section class="container programa_cooperacion">

  		<div class="row">

		  	<div class="col-md-10 offset-md-1">

		  		<div data-aos="fade-up" class="content_title">
		  			<h2>Programa de cooperación</h2>
		  			<img class="img-fluid" src="./img/que-hacemos/icon-programa.png" alt="icono programa">
		  		</div>

		  		<p data-aos="fade-up" class="copete">
		  			Nuestro <span>programa de cooperación</span> se lleva adelante mediante la asociación con organizaciones no gubernamentales lideradas por la comunidad, organizaciones filantrópicas, empresas, gobiernos e individuos que desean mejorar la salud y el bienestar de las poblaciones y de esa manera podemos cubrir más trabajo:
		  		</p>

	        <div class="row caracteristicas">
	        	
	        	<div data-aos="fade-up" class="col-md-6">

	        		<div data-aos="fade-up" class="item">
		        		<i class="fa-solid fa-check"></i>
		        		<p>
		        			Utilizamos nuestros recursos para avanzar en nuestra misión a través de la concesión de subvenciones, inversiones, compartir nuestro aprendizaje y levantar nuestra voz. 
		        		</p>
	        		</div>

	        		<div data-aos="fade-up" class="item">
		        		<i class="fa-solid fa-check"></i>
		        		<p>
		        			Financiamos y cooperamos en servicios directos que abordan las necesidades urgentes que enfrentan las personas en sus comunidades, particularmente las necesidades de las personas de bajos ingresos, los jóvenes y los residentes de áreas rurales. 
		        		</p>
	        		</div>

	        		<div data-aos="fade-up" class="item">
		        		<i class="fa-solid fa-check"></i>
		        		<p>
		        			Reconocemos, alentamos y fortalecemos a los líderes positivos para que sean poderosos agentes de cambio. 
		        		</p>
	        		</div>

	        	</div>

	        	<div data-aos="fade-up" class="col-md-6">

	        		<div data-aos="fade-up" class="item">
		        		<i class="fa-solid fa-check"></i>
		        		<p>
		        			Apoyamos la promoción y el compromiso cívico para que las comunidades puedan construir poder y crear políticas públicas que reflejen su visión, voluntad y necesidades. 
		        		</p>
	        		</div>

	        		<div data-aos="fade-up" class="item">
		        		<i class="fa-solid fa-check"></i>
		        		<p>
		        			Confiamos e invertimos en organizaciones sin fines de lucro para que puedan operar a plena capacidad. 
		        		</p>
	        		</div>

	        		<div data-aos="fade-up" class="item">
		        		<i class="fa-solid fa-check"></i>
		        		<p>
		        			Creamos vínculos entre individuos o empresas que crean tecnologías de avanzada con orientación a la mejora de la salud con las organizaciones sin fines de lucro y/o personas de bajos recursos.
		        		</p>
	        		</div>

	        	</div>

	        </div>

	        <div data-aos="fade-up" class="img_media">
        		<img class="img-fluid" src="./img/que-hacemos/cruz-roja.jpg" alt="cruz roja">
	        </div>

	        <p data-aos="fade-up" class="description">
	        	Los sentimientos de bienestar personal son fundamentales para nuestra salud en general, 
						permitiéndonos superar las dificultades y lograr las cosas que queremos en la vida. 
					</p>

					<p data-aos="fade-up" class="description">
						Nos debemos a nosotros mismos <strong>vivir nuestras vidas al máximo</strong> mientras tenemos la oportunidad, pero a veces necesitamos un poco de ayuda para hacerlo
					</p>

	        <div data-aos="fade-up" class="img_final">
        		<img class="img-fluid" src="./img/que-hacemos/last-icon.png" alt="iconos finales">
	        </div>

		  	</div>

	  	</div>

		</section>
		<!-- Programa de Cooperación end -->

	</section>
	<!-- Contenido QUE HACEMOS end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script type="text/javascript" src="./js/app.js"></script>

</body>

</html>
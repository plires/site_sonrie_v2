<?php
	
	require ('includes/config.inc.php');
  include_once('includes/soporte.php');

  $current = 'quienes_somos';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Creamos puentes para la igualdad y el beneficio mutuo.">
	<title>Quines somos - Sonrie la Vida</title>

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

	<!-- Contenido QUIENES SOMOS -->
	<section id="app" class="quienes">

		<!-- Header -->
		<?php include_once('./includes/header.php'); ?>

		<!-- Pos Header -->
		<section id="first_section" class="container-fluid pos_header">
		  	<div class="row">

			  	<div class="col-lg-7 img">
		        <img class="img-fluid" src="./img/quienes-somos/slide-quienes-somos.jpg" alt="slide quienes somos fundacion sonrie la vida">
			  	</div>

			  	<div class="col-lg-5 data">
		        <h2 data-aos="fade-up"><strong>Creamos puentes</strong><br>para la igualdad y <br>el beneficio mutuo.</h2>
			  	</div>

		  	</div>
		</section>
		<!-- Pos Header end -->

		<!-- Historia -->
		<section class="container-fluid historia">
			<div class="container">
		  	<div class="row">

		  		<div class="col-md-10 offset-md-1">

		  			<div class="row">
		  				
					  	<div class="col-md-12">
					  		<h1 data-aos="fade-up">¿Quiénes somos?</h1>
					  	</div>

					  	<div class="col-md-6 content">
				        <p data-aos="fade-up">
				        	Desde su acto constitutivo nuestra organización se basó en la atención PRIMARIA DE LA SALUD (necesidades de Grado 1).
				        </p>
				        <p data-aos="fade-up">
				        	Entre las principales actividades que se llevaron a cabo, se incluyeron talleres educativos para la prevención de enfermedades, el mantenimiento y la promoción de la salud. Para complementar estas actividades, se realizaron campañas asistenciales en el terreno para la prevención y promoción de la salud y donaciones de materiales necesarios. Estas actividades estaban dirigidas principalmente a madres, niños y niñas, adolescentes, personas mayores y discapacitados.
				        </p>
					  	</div>

					  	<div class="col-md-6 content">
					  		<h3 data-aos="fade-up">NUEVA REVOLUCIÓN TECNOLÓGICA</h3>
					  		<p data-aos="fade-up">
									Al ver como los avances tecnológicos logran cambios significativos decidimos ser protagonistas de los mismos incorporando tecnologías de avanzada capaces de proporcionarnos la capacidad de asistir a mayores segmentos de la población en menor tiempo y sus varias problemáticas de Grado 1, 2 y 3. 
					  		</p>
					  		<p data-aos="fade-up">
									Estos conocimientos y tecnología no debía ser concentrada en una sola organización y es por eso que nos propusimos colaborar con otras ONGs brindándoles las mismas tecnologías junto a recursos económicos disponibles a los efectos de comenzar a unir esfuerzos para llegar a disminuir el incremento de las afecciones en los Grados 1 y 2. 
					  		</p>
					  	</div>

		  			</div>

		  		</div>

	  		</div>
			</div>
		</section>
		<!-- Historia end -->

		<!-- Experiencia -->
		<section class="container experiencia">
	  	<div class="row">

	  		<div class="col-md-10 offset-md-1">
	  			<div class="row">

	  				<div class="col-md-6 img">
				  		<img data-aos="fade-up" class="img-fluid" src="./img/quienes-somos/experiencia.jpg" alt="experiencia fundacion sonrie la vida">
				  	</div>

				  	<div class="col-md-6 data">
				  		<div data-aos="fade-up">
					  		<p>
					  			"La experiencia profesional, trayectoria y ayuda de todos los amigos y socios de la fundación es el puente más sólido que podíamos intentar crear."
					  		</p>
					  		<p class="autor">
					  			Raúl Carignano, Presidente de la Fundación.  
					  		</p>
				  		</div>
				  	</div>
	  				
	  			</div>
	  		</div>

  		</div>
		</section>
		<!-- Experiencia end -->

		<!-- Misión -->
		<section class="container mision">
	  	<div class="row">

	  		<div class="col-md-10 offset-md-1">

	  			<div class="row titles">

	  				<div class="col-lg-12">

				  		<div class="content">
					  		<h2 data-aos="fade-up">Misión</h2>
					  		<p data-aos="fade-up">
					  			Nos inspiramos en el desarrollo vital de personas que se encuentren en situaciones de vulnerabilidad física y/o emocional. Proporcionando herramientas TECNOLÓGICAS que mejoren su desarrollo personal, entorno y bienestar general.
					  		</p>
				  		</div>

				  		<div class="content">
					  		<h2 data-aos="fade-up">Visión</h2>
					  		<p data-aos="fade-up">
					  			Creemos que al romperse muchos paradigmas y en lo vertiginoso de un futuro lleno de interrogantes, el ser humano oprimido en un sin sentido, necesita creer y crear una nueva realidad, partiendo de su propio bienestar. Creemos en nuestras competencias y que somos capaces de acompañar a muchas personas en ese retorno al orden natural.
					  		</p>
				  		</div>

				  	</div>
	  				
	  			</div>

	  			<div class="row imgs">

	  				<div class="col-lg-6">

	  					<div class="row">

	  						<div class="col-md-12">
				  				<img data-aos="fade-up" class="img-fluid img_first" src="./img/quienes-somos/objetivos-a.jpg" alt="objetivos a fundacion sonrie la vida">
	  						</div>

	  						<div class="col-md-7">
				  				<img data-aos="fade-up" class="img-fluid img_objetivos" src="./img/quienes-somos/objetivos-b.jpg" alt="objetivos B fundacion sonrie la vida">
	  						</div>	

	  						<div class="col-md-5">
				  				<img data-aos="fade-up" class="img-fluid img_objetivos" src="./img/quienes-somos/objetivos-c.jpg" alt="objetivos C fundacion sonrie la vida">
	  						</div>

	  						<div class="col-md-12">
				  				<img data-aos="fade-up" class="img-fluid img_objetivos" src="./img/quienes-somos/objetivos-d.jpg" alt="objetivos D fundacion sonrie la vida">
	  						</div>

	  					</div>

				  	</div>

		  			<div class="col-lg-6 data">
				  		<h3 data-aos="fade-up">Objetivos & Creencias</h3>

				  		<div data-aos="fade-up" class="content">
				  			<i class="fa-solid fa-check"></i>
				  			<p>
				  				Aspiramos a proporcionar a la comunidad, tecnologías capaces de mejorar los obstáculos que impiden la plenitud de las personas.
				  			</p>
				  		</div>

				  		<div data-aos="fade-up" class="content">
				  			<i class="fa-solid fa-check"></i>
				  			<p>
				  				Apuntamos a campañas de capacitación y difusión capaces de lograr concientizar problemas como lo son, la depresión, ansiedad, bullying.
				  			</p>
				  		</div>

				  		<div data-aos="fade-up" class="content">
				  			<i class="fa-solid fa-check"></i>
				  			<p>
				  				Aspiramos a que nuestro CID proporcione los avances propicios para alargar y mejorar la vida.
				  			</p>
				  		</div>

				  		<div data-aos="fade-up" class="content">
				  			<i class="fa-solid fa-check"></i>
				  			<p>
				  				Promovemos la educación y la incorporación de programas para enseñar y capacitar a las personas.
				  			</p>
				  		</div>

				  		<div data-aos="fade-up" class="content">
				  			<i class="fa-solid fa-check"></i>
				  			<p>
				  				Impulsamos la expansión del Arte y los Deportes como catalizadores de emociones.
				  			</p>
				  		</div>

				  		<div data-aos="fade-up" class="content">
				  			<i class="fa-solid fa-check"></i>
				  			<p>
				  				Valoramos la cooperación y la disposición tanto de empresas públicas, privadas y/o Instituciones Universitarias.
				  			</p>
				  		</div>

				  		<div data-aos="fade-up" class="content">
				  			<i class="fa-solid fa-check"></i>
				  			<p>
				  				Trabajar en conjunto con diversas ONG que puedan cooperar con el bienestar en todos sus grados mediante acciones por realizar en conjunto
				  			</p>
				  		</div>

				  	</div>

	  			</div>

	  		</div>

  		</div>
		</section>
		<!-- Misión end -->

		<!-- Nuestra Historia -->
		<section class="container-fluid nuestra_historia">
			<div class="container">
				
		  	<div class="row">
		  		<div class="col-md-10 offset-md-1">
	  				<h2 data-aos="fade-up">Nuestra historia</h2>
	  			</div>
	  		</div>

				<div class="row">
					<div class="col-md-5">
  					<p data-aos="fade-up" class="year">20<span>05</span></p>
  				</div>
					<div class="col-md-7">
  					<div data-aos="fade-up" class="data">
  						<h3>Nacimiento</h3>
  						<p>En el año 2005 nace nuestra fundación <strong>Sonríe la Vida.</strong></p>
  					</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5">
						<p data-aos="fade-up" class="year">20<span>10</span></p>
					</div>
					<div class="col-md-7">
						<div data-aos="fade-up" class="data">
							<h3>Campañas y Programas de<br>ATENCIÓN PRIMARIA EN EL NORTE</h3>
							<p>
								Estos programas estaban centrados en la asistencia primaria a niños en zonas vulnerables. Una de las acciones más destacadas de este tiempo fue la donación del primer centro odontológico gratuito para el municipio de Aristóbulo del Valle en la Provincia de Misiones
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5">
						<p data-aos="fade-up" class="year">20<span>15</span></p>
					</div>
					<div class="col-md-7">
						<div data-aos="fade-up" class="data">
							<img class="img-fluid" src="./img/quienes-somos/2015-a.jpg" alt="grupo fundacion sonrie la vida">
							<h3>Convenio de cooperación</h3>
							<p>
								Convenio de cooperación entre La Universidad Abierta Interamericana y la Fundación Sonríe la Vida, para el desarrollo de la educación en el área de la Odontología.
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5">
						<p data-aos="fade-up" class="year">20<span>15</span></p>
					</div>
					<div class="col-md-7">
						<div data-aos="fade-up" class="data">
							<img class="img-fluid" src="./img/quienes-somos/2015-b.jpg" alt="grupo b fundacion sonrie la vida">
							<h3>Colaboración con la Fundación River</h3>
							<p>
								La Fundación River Plate dona a la Fundación Sonríe la Vida un equipo odontológico completo, que luego fue entregado a Margarita Barrientos de Los Piletones
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5">
						<p data-aos="fade-up" class="year">20<span>16</span></p>
					</div>
					<div class="col-md-7">
						<div data-aos="fade-up" class="data">
							<img class="img-fluid" src="./img/quienes-somos/2016.jpg" alt="grupo 2016 fundacion sonrie la vida">
							<h3>La Fundación Boca Social se unió a la campaña Grandes Ideales</h3>
							<p>
								#JugándonosPorGrandesIdeales de la Fundación Sonríe la Vida. 
								Mediante un trabajo de campo en Mina Clavero se les brindó atención odontológica a 200 personas, #adultos y #niños, de la provincia de #Córdoba. Se les enseñó la técnica del cepillado de dientes y se los instruyó sobre cuestiones de #prevención. Además, en la Escuela "Policía Federal Argentina", se atendieron consultas oftalmológicas.
								También se realizó una caminata desde la plaza principal de Mina Clavero a la de Cura Brochero, simbolizando el "Camino de la #Fe" para toda la #familia. 
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5">
						<p data-aos="fade-up" class="year">20<span>17</span></p>
					</div>
					<div class="col-md-7">
						<div data-aos="fade-up" class="data">
							<div class="row">

								<div class="col-7">
									<img class="img-fluid" src="./img/quienes-somos/2017-a.jpg" alt="grupo a fundacion sonrie la vida">
								</div>

								<div class="col-5">
									<img class="img-fluid" src="./img/quienes-somos/2017-b.jpg" alt="grupo b fundacion sonrie la vida">
								</div>

							</div>
							<h3>Centro Odontológico público en Misiones.</h3>
							<p>
								Misiones inauguró un Centro de Odontología público de primer nivel en Aristóbulo del Valle y la Fundación formó parte de este proceso.
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5">
						<p data-aos="fade-up" class="year">20<span>19</span></p>
					</div>
					<div class="col-md-7">
						<div data-aos="fade-up" class="data">
							<img class="img-fluid" src="./img/quienes-somos/2019.jpg" alt="grupo 2019 fundacion sonrie la vida">
							<h3>Comienzo de la pandemia</h3>
							<p>
								En un comienzo y debido a la extremada incertidumbre que nos provocó dicho evento y sabiendo que esto incrementaría no solo la pobreza sino más aún la condiciones de salud de la población en todo el mundo sin excepciones comenzamos a darnos cuenta que un cambio de paradigma  había comenzado y que deberíamos comenzar a utilizar estas tecnologías para aportar mayor información respecto al  COVID 19  por medio del programa de padrinos de nuestra institución logramos el apoyo de LA DROGUERÍA META Y EL SINDICATO DE PATRONES NAVALES  a través del cual se logra la primera puesta en marcha de la tecnología en el Hospital Suipacha, Empresas privadas e instituciones (Hospital Militar).  Producto de ello se logra detectar el Virus COVID 19 con una anticipación de 5 días respecto a otros medios tradicionales ayudando así a la no propagación del virus en determinada región.
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5">
						<p data-aos="fade-up" class="year">20<span>21</span></p>
					</div>
					<div class="col-md-7">
						<div data-aos="fade-up" class="data">
							<img class="img-fluid" src="./img/quienes-somos/2021.jpg" alt="grupo 2021 fundacion sonrie la vida">
							<h3>Proyecto COVID con el HOSPITAL MUNICIPAL DE SUIPACHA</h3>
							<p>
								En los peores momentos de  PANDEMIA, el servicio de BIOQUÍMICA del HOSPITAL, toma contacto con la FUNDACIÓN SONRÍE LA VIDA para utilizar esta NUEVA TECNOLOGÍA. Se hace un convenio donde la FUNDACIÓN dona la tecnología, capacita al personal, y a partir de ahí surge un ESTUDIO CIENTÍFICO que da como resultado sobre una muestra de 144 casos que el sistema por VOZ logró tener un 78% de efectividad en los primeros 7 días de la infección, en paralelo con el PROTOCOLO OFICIAL del CORONAVIRUS.
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5">
						<p data-aos="fade-up" class="year">20<span>21</span></p>
					</div>
					<div class="col-md-7">
						<div data-aos="fade-up" class="data">
							<img class="img-fluid" src="./img/quienes-somos/2021-b.jpg" alt="grupo 2021-b fundacion sonrie la vida">
							<h3>ONU/CIFAL</h3>
							<p>
								Luego del éxito en la investigación clínica se comienza a trabajar junto con el Hospital Militar y se realiza el protocolo de investigación asimismo este desembarco se hace junto a CIFAL ARGENTINA UNITAR/ONU
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5">
						<p data-aos="fade-up" class="year">20<span>22</span></p>
					</div>
					<div class="col-md-7">
						<div data-aos="fade-up" class="data">
							<h3>ACTUALIDAD</h3>
							<div class="line">
								<p>
	  							Se comenzó con el registro e investigación de tecnologías basadas en IA con el fin de desarrollar clínica médica para luego su utilización en las zonas más vulnerables, al mismo tiempo se crea el programa RENACERE por el cual los profesionales que integran el centro de i y d  logran la medicina integrativa la cual junto a AI GENÓMICA Y TELOMEROS logran brindar a Padrinos del Bienestar (primero ellos ayúdate y el antienvejecimiento interviniendo en el mismo donan a nuestra organización se ayudan y ayudan a nuestra ONG a continuar expandiendo las nuevas tecnologías a las zonas más vulnerable (Suipacha Aristóbulo etc) 
	  						</p>

	  						<p>
	  							Nuestra ONG de acuerdo a sus donaciones logra cerrar un acuerdo con REMENTE empresa sueca especializada en bienestar corporativo con la idea de recibir donaciones de las corporaciones a cambio de unir herramientas de AI desarrolladas por FSV y la tecnología SUECA lo cual nuestra ong crea la primera empresa de triple impacto.  (WELLNES PARA RETENER EMPLEADOS LEY DE MÉXICO)
	  						</p>

	  						<p>
									<strong>La Fundación Sonríe la Vida se suma a ISTEC como ONG asociada</strong>
									La Fundación Sonríe la Vida se unió al Consorcio Iberoamericano para la Educación en Ciencia y Tecnología (ISTEC) como Organización No Gubernamental (ONG) asociada.
	  						</p>

	  						<p>
									El propósito de la Fundación es contribuir a que los <strong>tratamientos</strong> centrados en la Longevidad y el Bienestar Emocional de las personas, sean <strong>accesibles para todos,</strong> sin importar edad, origen, raza, estatus social/económico o género.
	  						</p>

							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
	  				<div class="content_img_colibri">
			  			<img data-aos="fade-up" class="img-fluid" src="./img/quienes-somos/colibri-green.png" alt="colibri green fundacion sonrie la vida">
			  		</div>
					</div>
				</div>

			</div>

		</section>
		<!-- Nuestra Historia end -->

	</section>
	<!-- Contenido QUIENES SOMOS end -->

	<!-- Footer -->
	<?php include_once('./includes/footer.php'); ?>

	<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script type="text/javascript" src="./js/app.js"></script>

</body>

</html>
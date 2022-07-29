<?php 

  require ('includes/config.inc.php');
  include_once('includes/soporte.php');

  $current = 'home';

  require __DIR__  . '/vendor/autoload.php';

  if ( !isset($_GET['payment_id']) || empty($_GET['payment_id'])) {

    header("Location: " . BASE );
    die();
    
  }

?>



<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Tag Manager Head -->
  <?php include_once("./includes/tag_manager_head.php"); ?>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Esperamos tu danación. Nuestro más importante logro en estos años de investigación fue la creación del PROGRAMA Rinascere">
  <title>Donación pendiente - Fundación Sonrie la Vida</title>

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

  <!-- Contenido DONACIÓN -->
  <section class="transition investigacion">

    <!-- Header -->
    <?php include_once('./includes/header.php'); ?>

    <!-- Header Pago -->
    <section id="first_section" class="container-fluid content_image_header header_investigacion">

      <div class="container payment">
      
        <div class="row">
          <div class="col-md-12 p-0">
            <h1>DONACIÓN PENDIENTE</h1>
          </div>
        </div>

        <div class="row">
          
          <div class="col-md-12 p-0">

            <h2>No pudimos procesar tu donación.</h2>

            <p class="parrafo">
              Tuviste algún problema para realizar la donación. Por favor <a class="transition link" href="./contacto.php">cantactanos</a>
            </p>

            <hr class="my-4">
            
            <div class="text-center">
              <a class="btn btn-primary btn-lg segui_navegando transition" href="./" role="button">SEGUÍ NAVEGANDO EN NUESTRA WEB</a>
            </div>
            
          </div>

        </div>
      </div>

    </section>
    <!-- Header Pago -->

  </section>
  <!-- Contenido DONACIÓN end -->

  <!-- Footer -->
  <?php include_once('./includes/footer.php'); ?>

  <script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="./node_modules/jquery-easing/dist/jquery.easing.1.3.umd.min.js"></script>
  <script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
  <script type="text/javascript" src="./js/app.js"></script>
</body>

</html>
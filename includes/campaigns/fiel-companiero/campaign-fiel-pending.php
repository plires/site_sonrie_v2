<?php 

  require ('../../../includes/config.inc.php');
  include_once('../../../includes/soporte.php');

  $current = 'home';

  require ('../../../vendor/autoload.php');

  if ( !isset($_GET['payment_id']) || empty($_GET['payment_id'])) {

    header("Location: " . BASE );
    die();
    
  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Tag Manager Head -->
  <?php include_once("../../../includes/tag_manager_head.php"); ?>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Esperamos tu danación. Nuestro más importante logro en estos años de investigación fue la creación del PROGRAMA Rinascere">
  <title>Donación pendiente - Fundación Sonrie la Vida</title>

  <link rel="apple-touch-icon" sizes="57x57" href="../../../img/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../../../img/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../../../img/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../../../img/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../../../img/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../../../img/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../../../img/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../../../img/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../../img/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="../../../img/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../../img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../../../img/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../../img/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../../img/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../../../img/favicons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" type="text/css" href="../../../node_modules/normalize.css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../node_modules/aos/dist/aos.css"/>
  <link rel="stylesheet" href="../../../css/app.css">
</head>
<body>
  <!-- Tag Manager Body -->
  <?php include_once("../../../includes/tag_manager_body.php"); ?>

  <!-- Contenido DONACIÓN -->
  <section class="transition payment_content payment_campaign_fiel">

    <!-- Header -->
    <?php include_once('../../../includes/header.php'); ?>

    <!-- Header Pago -->
    <section id="first_section" class="container-fluid content_image_header">

      <div class="container payment">
      
        <div class="row">
          <div class="col-md-12 p-0">
            <h1>NO SE PUDO REALIZAR EL PAGO O ESTA PENDIENTE</h1>
          </div>
        </div>

        <div class="row">
          
          <div class="col-md-12 p-0">

            <h2>No pudimos procesar tu pago.</h2>

            <p class="parrafo">
              Tuviste algún problema para realizar el pago? Por favor <a class="transition link" href="<?= BASE . 'contacto.php' ?>">cantactanos</a>
            </p>

            <hr class="my-4">
            
            <div class="text-center">
              <a class="btn btn-primary btn-lg segui_navegando transition" href="<?= BASE ?>" role="button">SEGUÍ NAVEGANDO EN NUESTRA WEB</a>
            </div>
            
          </div>

        </div>
      </div>

    </section>
    <!-- Header Pago -->

  </section>
  <!-- Contenido DONACIÓN end -->

  <!-- Footer -->
  <?php include_once('../../../includes/footer.php'); ?>

  <script type="text/javascript" src="../../../node_modules/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="../../../node_modules/jquery-easing/dist/jquery.easing.1.3.umd.min.js"></script>
  <script type="text/javascript" src="../../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../../node_modules/aos/dist/aos.js"></script>
  <script type="text/javascript" src="../../../js/app.js"></script>
</body>

</html>
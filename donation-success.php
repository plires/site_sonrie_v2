<?php 

  require ('includes/config.inc.php');
  include_once('includes/soporte.php');

  $current = 'home';

  require __DIR__  . '/vendor/autoload.php';

  if ( !isset($_GET['payment_id']) || empty($_GET['payment_id'])) {

    header("Location: " . BASE );
    die();
    
  } else {

    MercadoPago\SDK::setAccessToken(ACCESS_TOKEN);

    $merchant_order = null;

    $total_paid_amount = 0;

    $payment = MercadoPago\Payment::find_by_id($_GET['payment_id']);

    if ($payment->status == 'approved'){
      $order_id = $payment->id;
      $status = $payment->status;
      $currency_id = $payment->currency_id; //ARS
      $total_paid_amount = $payment->transaction_amount;
      $payment_type_id = $payment->payment_type_id;
      $description = $payment->description;
    }

  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Tag Manager Head -->
  <?php include_once("./includes/tag_manager_head.php"); ?>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Nuestro más importante logro en estos años de investigación
fue la creación del PROGRAMA Rinascere">
  <title>Gracias por tu donación - Fundación Sonrie la Vida</title>

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
  <section class="transition payment_content">

    <!-- Header -->
    <?php include_once('./includes/header.php'); ?>

    <!-- Header Pago -->
    <section id="first_section" class="container-fluid content_image_header">

      <div class="container payment">
      
        <div class="row">
          <div class="col-md-12 p-0">
            <h1>RECIBIMOS TU DONACIÓN</h1>
          </div>
        </div>

        <div class="row">
          
          <div class="col-md-12 p-0">

            <h2>¡Gracias por tu donación!</h2>

            <p class="parrafo">
              <strong>Queremos agradecer tu gran aporte.</strong> <br>
              Esto redobla nuestro compromiso para acercar la tecnología de la Inteligencia Artificial al ser humano, y así poder aportar a su bienestar, su longevidad y su felicidad.
            </p>

            <hr class="my-4">
            
            <p>Compartimos los datos de tu transacción para tu control.</p>

            <p class="parrafo_payment">
              <br>
              <strong>NÚMERO DE CUPÓN:&nbsp;&nbsp;</strong><?= $order_id; ?><br>
              <strong>DESTINATARIO:&nbsp;&nbsp;</strong><?= $description; ?><br>
              <strong>ESTADO DEL PAGO:&nbsp;&nbsp;</strong><?= $status; ?><br>
              <strong>MEDIO DE PAGO:&nbsp;&nbsp;</strong><?= $payment_type_id; ?><br>
              <strong>VALOR:&nbsp;&nbsp;</strong><?= $currency_id .' '. $total_paid_amount; ?><br>
            </p
            >
            <p>Nuevamente <strong>Gracias por tu aporte</strong> y por cualquier consulta no dudes en <a class="transition link" href="./contacto.php">contactarnos</a></p>

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
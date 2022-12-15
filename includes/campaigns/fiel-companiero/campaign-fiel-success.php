<?php 

  require ('../../../includes/config.inc.php');
  include_once('../../../includes/soporte.php');
  require_once("../../../clases/app.php");
  require_once("../../../clases/repositorioSQL.php");
  
  $db = new RepositorioSQL();

  $current = 'home';

  require ('../../../vendor/autoload.php');

  if ( !isset($_GET['payment_id']) || empty($_GET['payment_id'])) {

    header("Location: " . BASE );
    die();
    
  } else {

    MercadoPago\SDK::setAccessToken(ACCESS_TOKEN);

    $merchant_order = null;

    $total_paid_amount = 0;

    $preference = MercadoPago\Preference::find_by_id($_GET['preference_id']);

    $user['name'] = $preference->payer->name;
    $user['email'] = $preference->payer->email;
    $user['phone'] = $preference->payer->phone->number;
    $user['dni_type'] = $preference->payer->identification->type;
    $user['dni_number'] = $preference->payer->identification->number;

    $payments_id = explode(",", $_GET['payment_id']);

    if ( count($payments_id) > 1 ) { // si se abono con dos medios de pago

      foreach ($payments_id as $key => $payment_id) {
        $payments[$key] = MercadoPago\Payment::find_by_id($payment_id);
      }

    } else { // Si se abono con un medio de pago
      $payments[0] = MercadoPago\Payment::find_by_id($payments_id[0]);
    }

    $product = $db->getRepoProducts()->getProductBySku( $payments[0]->description );

    foreach ($payments as $payment) {
      // Grabar operación en base de datos solo si el producto aun figura disponible
      if ($product['available']) {
        $db->getRepoProducts()->saveTransaction( $user, $product, $payment );
      }
    }

    // Modificar tabla productos para editar el stock o disponibilidad del producto vendido
    if ($product['available']) {
      $db->getRepoProducts()->setProductAsUnavailable( $product['id'] );

      //Enviamos los mails al cliente y usuario
      $app = new App;

      $app->sendEmail('Cliente', 'Campania Fiel Companiero Cliente', $user, $product, $payments);
      $app->sendEmail('Usuario', 'Campania Fiel Companiero Usuario', $user, $product, $payments);

      $product_not_available = false;
    } else {
      $product_not_available = true;
    }

  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Tag Manager Head -->
  <?php include_once("../../../includes/tag_manager_head.php"); ?>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Nuestro más importante logro en estos años de investigación
fue la creación del PROGRAMA Rinascere">
  <title>Gracias por tu compra - Fundación Sonrie la Vida</title>

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

      <?php if ($product_not_available): ?>
        
        <div class="container payment payment_success">
          <div class="row">
            <div class="col-md-12 p-0">
              <h1>EL PRODUCTO <?= $product['sku'] ?>  YA NO ESTA DISPONIBLE PARA LA COMPRA</h1>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 p-0">
              <p class="parrafo">
                Es probable que durante el proceso de compra, otro usuario haya adquirido el mismo producto y concretado el pago antes que vos.
              </p>

              <p class="parrafo">
                También puede ser que estes visualizando esta leyenda, simplemente porque refrescaste esta página. Si es así, no hay problema, tu producto esta abonado y listo para ser retirado.
              </p>

              <p>
                De cualquier modo, quedate tranquilo, podés contactarnos y consultar el estado de tu compra de manera dirécta desde nuestro <a class="transition link" href="<?= BASE . 'contacto.php' ?>">formulario de consultas</a>
              </p>

              <p>
                También podes <a class="link transition" href="tel:1124682923">llamarnos al 11 2468 2923</a>
              </p>

              <p>Estos son los datos de tu compra:</p>

                <?php foreach ($payments as $key => $payment): ?>

                  <?php
                    // Obtener el medio de Pago
                    $payment_type = $db->getRepoProducts()->getPaymentType( $payment->payment_type_id );

                    // Obtener el status de Pago
                    $status = $db->getRepoProducts()->getPaymentStatus( $payment->status );

                  ?>
                <p>
                  <strong>NÚMERO DE OPERACIÓN:&nbsp;&nbsp;</strong><?= $payment->id; ?><br>
                  <strong>SKU PRODUCTO COMPRADO:&nbsp;&nbsp;</strong><?= $payment->description; ?><br>
                  <strong>CATEGORÍA:&nbsp;&nbsp;</strong><?= $preference->items[0]->category_id; ?><br>
                  <strong>ESTADO DE LA ORDEN:&nbsp;&nbsp;</strong><?= $status; ?><br>
                  <strong>MEDIO DE PAGO:&nbsp;&nbsp;</strong><?= $payment_type; ?><br>
                  <strong>IMPORTE ABONADO:&nbsp;&nbsp;</strong><?= $payment->currency_id .' '. $payment->transaction_amount; ?>
                </p>

              <?php endforeach ?>

            </div>
          </div>
        </div>

      <?php else: ?>

        <div class="container payment payment_success">
      
          <div class="row">
            <div class="col-md-12 p-0">
              <h1>RECIBIMOS TU DONACIÓN</h1>
            </div>
          </div>

          <div class="row">
            
            <div class="col-md-12 p-0">

              <h2>Gracias por ser parte de FIEL COMPAÑERO</h2>

              <p class="parrafo">
                De parte del equipo de la Fundación Sonríe La Vida te queremos agradecer por ayudar a los chicos de Cuidados Paliativos del Hospital Gutierrez a tener unos Reyes Magos inolvidables! 
              </p>
              
              <p class="parrafo">
                Chequea tu casilla de correo y seguí las instrucciones para finalizar el proceso.
              </p>

              <hr class="my-4 hr_payment_success">
              
              <p>Compartimos los datos de tu transacción para tu control.</p>

              <div class="content_data">

                <div class="data">
                  <p class="parrafo_payment parrafo_payment_success">
                    <strong>NOMBRE:&nbsp;&nbsp;</strong><?= $user['name']; ?><br>
                    <strong>EMAIL:&nbsp;&nbsp;</strong><?= $user['email']; ?><br>
                    <strong>TELÉFONO:&nbsp;&nbsp;</strong><?= $user['phone']; ?><br>
                    <strong>DOCUMENTO:&nbsp;&nbsp;</strong><?= $user['dni_type'] .': '. $user['dni_number'] ; ?>
                  </p>

                  <?php foreach ($payments as $key => $payment): ?>

                    <?php
                      // Obtener el medio de Pago
                      $payment_type = $db->getRepoProducts()->getPaymentType( $payment->payment_type_id );

                      // Obtener el status de Pago
                      $status = $db->getRepoProducts()->getPaymentStatus( $payment->status );

                    ?>

                    <p class="parrafo_payment parrafo_payment_success">
                      <br>
                      <strong>NÚMERO DE OPERACIÓN:&nbsp;&nbsp;</strong><?= $payment->id; ?><br>
                      <strong>SKU PRODUCTO COMPRADO:&nbsp;&nbsp;</strong><?= $payment->description; ?><br>
                      <strong>CATEGORÍA:&nbsp;&nbsp;</strong><?= $preference->items[0]->category_id; ?><br>
                      <strong>ESTADO DE LA ORDEN:&nbsp;&nbsp;</strong><?= $status; ?><br>
                      <strong>MEDIO DE PAGO:&nbsp;&nbsp;</strong><?= $payment_type; ?><br>
                      <strong>IMPORTE ABONADO:&nbsp;&nbsp;</strong><?= $payment->currency_id .' '. $payment->transaction_amount; ?>
                    </p>
                    
                  <?php endforeach ?>
                  
                </div>

                <div class="image">
                  <img class="img-fluid payment_image" src="<?= $preference->items[0]->picture_url ?>" alt="imagen producto">
                </div>
                
              </div>

              <br>

              <p>Nuevamente <strong>Gracias por tu aporte</strong> y por cualquier consulta no dudes en <a class="transition link" href="<?= BASE . 'contacto.php' ?>">contactarnos</a></p>

              <br>

              <div class="text-center">
                <a class="btn btn-primary btn-lg segui_navegando transition" href="<?= BASE ?>" role="button">SEGUÍ NAVEGANDO EN NUESTRA WEB</a>
              </div>
              
            </div>

          </div>
      </div>

      <?php endif ?>

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
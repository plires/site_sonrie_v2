<?php
  
  require_once( __DIR__ . '/../vendor/autoload.php' );
  include( __DIR__ . '/../includes/config.inc.php');
  include( __DIR__ . '/../includes/functions.php');
  include( __DIR__ . '/../clases/app.php');
  
  $app = new App;

  if ( 
    empty($_POST) || 
    emptyInput($_POST['value']) ||
    !is_numeric($_POST['value'])
    )
  {

    header('Content-type: application/json');
    echo false; exit;

  }

  $mp = $app->getLinkPayMercadoPago( $_POST['value'], IMAGE_FOR_MP );

  header('Content-type: application/json');
  echo json_encode($mp);



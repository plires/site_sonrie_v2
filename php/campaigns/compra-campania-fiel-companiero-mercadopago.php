<?php
  
  require_once( __DIR__ . '/../../vendor/autoload.php' );
  include( __DIR__ . './../../includes/config.inc.php');
  include( __DIR__ . '/../../includes/functions.php');
  include( __DIR__ . '/../../clases/app.php');
  
  $app = new App;

  $postedDataProduct = $_POST['product'];
  $tempDataProduct = str_replace("\\", "",$postedDataProduct);
  $product = json_decode($tempDataProduct);

  $postedDataUser = $_POST['user'];
  $tempDataUser = str_replace("\\", "",$postedDataUser);
  $user = json_decode($tempDataUser);

  if ( 
    empty($_POST) || 
    emptyInput($product->id) ||
    emptyInput($product->sku) ||
    emptyInput($product->name) ||
    emptyInput($product->image) ||
    emptyInput($product->category) ||
    emptyInput($user->name) ||
    emptyInput($user->email) ||
    emptyInput($user->phone) ||
    emptyInput($user->dni) ||
    emptyInput($user->cuit) || 
    strlen($user->cuit) != 11 ||
    emptyInput($_POST['value']) ||
    !is_numeric($_POST['value'])
    )
  {

    header('Content-type: application/json');
    echo false; exit;

  }

  $mp = $app->getLinkPayMercadoPagoForCampaignFielCompaniero( $_POST['value'], $product, $user );

  header('Content-type: application/json');
  echo json_encode($mp);



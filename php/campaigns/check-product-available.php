<?php
  
  require_once( __DIR__ . './../../vendor/autoload.php' );
  include( __DIR__ . './../../includes/config.inc.php');
  require_once("./../../clases/repositorioSQL.php");
  
  $db = new RepositorioSQL();

  if ( 
    empty($_POST) || 
    !is_numeric($_POST['product_id'])
    )
  {

    header('Content-type: application/json');
    echo false; exit;

  }

  $isProductAvailable = $db->getRepoProducts()->checkProductAvailable( $_POST['product_id'] );
  
  header('Content-type: application/json');
  echo $isProductAvailable;



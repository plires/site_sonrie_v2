<?php 
	
	require ('./../../includes/config.inc.php');
  include_once('./../../includes/soporte.php');
	include_once __DIR__ . './../../clases/repositorioSQL.php';
	
	$products = $db->getRepoProducts()->getProducts();

	header('Content-type: application/json');
	echo json_encode($products);

?>
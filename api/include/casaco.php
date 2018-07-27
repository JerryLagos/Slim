<?php 

	//  Proceso para recuperacion de cuenta
	$app->POST('/informacion', function() use($app){
		require_once('../controllers/casaco.php');
		echo json_encode($cc->informacion());
	});

?>
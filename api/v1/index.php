<?php

//CONEXION DB
require_once '../config/config.php';

// require_once 'app/init.php';

// echo $fbauth->getAuthUrl();

/**
 * Step 1: Require the Slim Framework
 *
 * If you are not using Composer, you need to require the
 * Slim Framework and register its PSR-0 autoloader.
 *
 * If you are using Composer, you can skip this step.
 */
require '../libs/Slim/Slim.php';
require_once '../libs/stripe-php/init.php';
require_once '../libs/jwt/jwt.php';

\Slim\Slim::registerAutoloader();

/**
 * Step 2: Instantiate a Slim application
 *
 * This example instantiates a Slim application using
 * its default settings. However, you will usually configure
 * your Slim application now by passing an associative array
 * of setting names and values into the application constructor.
 */

// $app = new \Slim\Slim();

$app = new \Slim\Slim(array('debug' => false
));



/**
 * Step 3: Define the Slim application routes
 *
 * Here we define several Slim application routes that respond
 * to appropriate HTTP request methods. In this example, the second
 * argument for `Slim::get`, `Slim::post`, `Slim::put`, `Slim::patch`, and `Slim::delete`
 * is an anonymous function.
 */

//ADICIONA CORS PARA VALIDAR ACCESO DE OTROS DOMINIOS

require ('../libs/corsSlim/CorsSlim.php');
	
$corsOptions = array(
	"origin"           => "*",
	"exposeHeaders"    => array("cabecera", "X-Another-Custom-Header"),
	"maxAge"           => 1728000,
	"allowCredentials" => True,
	"allowMethods"     => array("POST", "GET", "PUT","OPTIONS","DELETE"),
	"allowHeaders"     => array("cabecera")
    );

$cors = new \CorsSlim\CorsSlim($corsOptions);
header("Content-Type: text/html;charset=utf-8");
$app->add($cors);

$app->response->headers->set('Content-Type', 'application/json');
$app->response->headers->set('Access-Control-Allow-Origin', '*');


//////////////////////////////////////////////////////////////////////////////////
$user_id = NULL;



//  CONSUMO APIS HOTELBEDS
// require_once '../include/school.php';
// require_once '../include/cc.php';
require_once '../include/casaco.php';



/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This executes the Slim application
 * and returns the HTTP response to the HTTP client.
 */
$app->run();

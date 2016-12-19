<?php

require "vendor/autoload.php";

\Slim\Slim::registerAutoloader();

$app = new Slim\Slim();

$app->get('/' , function() use ($app){

	$data = file_get_contents("data/employees.json");
	$datos_empleados = json_decode($data);

	$app->render('index.php' , compact('datos_empleados'));
});


$app->run();
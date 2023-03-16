<?php 

use Slim\Factory\AppFactory;
use App\Controllers\ClientesController;
use Slim\Middleware\BodyParsingMiddleware;

require "../vendor/autoload.php";
header("Access-Control-Allow-Origin: *");

$app = AppFactory::create();

$app->addBodyParsingMiddleware();

$app->AddErrorMiddleware(true,true,true);

$app->get('/listar', ClientesController::class . ':getCliente');

$app->run();
<?php 

use Slim\Factory\AppFactory;
use App\Controllers\ProdutoController;
use App\Controllers\LojaController;
use Slim\Middleware\BodyParsingMiddleware;

require "../vendor/autoload.php";
header("Access-Control-Allow-Origin: *");


$app = AppFactory::create();

$app->addBodyParsingMiddleware();

$app->AddErrorMiddleware(true,true,true);


$app->get('/Listarproduto', ProdutoController::class . ':getProduto');
$app->post('/produto', ProdutoController::class . ':insertProduto');
$app->put('/produto', ProdutoController::class . ':updateProduto');
$app->delete('/produto', ProdutoController::class . ':deleteProduto');

$app->get('/loja', LojaController::class . ':getLojas');
$app->post('/loja', LojaController::class . ':insertLoja');
$app->put('/loja', LojaController::class . ':updateLoja');
$app->delete('/loja', LojaController::class . ':deleteLoja');

$app->run();
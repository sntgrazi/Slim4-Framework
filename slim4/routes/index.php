<?php 

use Slim\Factory\AppFactory;
use App\Controllers\ProdutoController;
use App\Controllers\LojaController;

require "../vendor/autoload.php";


$app = AppFactory::create();

$app->AddErrorMiddleware(true,true,true);

$app->get('/produto', ProdutoController::class . ':getProduto');
$app->post('/produto', ProdutoController::class . ':insertProduto');
$app->put('/produto', ProdutoController::class . ':updateProduto');
$app->delete('/produto', ProdutoController::class . ':deleteProduto');

$app->get('/loja', LojaController::class . ':getLojas');
$app->post('/loja', LojaController::class . ':insertLoja');
$app->put('/loja', LojaController::class . ':updateLoja');
$app->delete('/loja', LojaController::class . ':deleteLoja');

$app->run();
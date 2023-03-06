<?php


namespace App\Controllers;

use App\DAO\LojasDAO;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;

final class LojaController {

    public function getLojas(Request $resquest, Response $response, array $args){
        $lojasDAO = new LojasDAO();
        $lojas = $lojasDAO->getAllLojas();

        $response->getBody()->write(json_encode($lojas));
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function insertLoja(Request $resquest, Response $response, array $args){

    }
    
    public function updateLoja(Request $resquest, Response $response, array $args){

    }
    
    public function deleteLoja(Request $resquest, Response $response, array $args){

    }

}
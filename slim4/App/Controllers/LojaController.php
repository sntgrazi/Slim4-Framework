<?php


namespace App\Controllers;

use App\DAO\LojasDAO;
use App\Model\LojaModel;
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
       
        $data = $resquest->getBody();
       
        $lojasDAO = new LojasDAO();
        $loja = new LojaModel();
        $loja->setNome('nome');
        $loja->setEndereco('endereco');
        $loja->setTelefone('telefone');
        $lojasDAO->insertLoja($loja);


        $response = $response->getBody()->write(json_encode(['message' =>
        'Loja inserida com sucesso']));
        return $response;
    }
    
    public function updateLoja(Request $resquest, Response $response, array $args){

    }
    
    public function deleteLoja(Request $resquest, Response $response, array $args){

    }

}
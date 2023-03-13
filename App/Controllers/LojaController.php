<?php


namespace App\Controllers;

use App\DAO\LojasDAO;
use App\Models\LojaModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;

final class LojaController {

    public function getLojas(Request $request, Response $response, array $args)
    {
        $lojasDAO = new LojasDAO();
        $lojas = $lojasDAO->getAllLojas();

        $response->getBody()->write(json_encode($lojas));
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function insertLoja(Request $request, Response $response, array $args)
    {
        $data = $request->getParsedBody();
        $lojasDAO = new LojasDAO();
        $loja = new LojaModel();
        $loja->setNome($data['nome'])
             ->setEndereco($data['endereco'])
             ->setTelefone($data['telefone']);
        $lojasDAO->insertLoja($loja);

        
        $response->getBody()->write(json_encode(['message' => 'Loja inserida com sucesso']));
        return  $response->withHeader('Content-Type', 'application/json');
    }
    
    public function updateLoja(Request $request, Response $response, array $args)
    {
        $data = $request->getParsedBody();
        $lojasDAO = new LojasDAO();
        $loja = new LojaModel();
        $loja->setNome($data['nome'])
             ->setEndereco($data['endereco'])
             ->setTelefone($data['telefone'])
             ->setId($data['id']);
        $lojasDAO->updateLoja($loja);

        $response->getBody()->write(json_encode(['message' => 'Loja atualizada com sucesso']));
        return  $response->withHeader('Content-Type', 'application/json');
    }
    
    public function deleteLoja(Request $request, Response $response, array $args){

        $data = $request->getParsedBody();

        $lojasDAO = new LojasDAO();
        $loja = new LojaModel();
        $loja->setId($data['id']);
        $lojasDAO->deleteLoja($loja);

        $response->getBody()->write(json_encode(['message' => 'Loja deletada com sucesso']));
        return  $response->withHeader('Content-Type', 'application/json');
    }

    

}
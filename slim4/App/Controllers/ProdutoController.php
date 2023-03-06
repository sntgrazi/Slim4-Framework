<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class ProdutoController{

    public function getProduto(Request $request, Response $response, array $args): Response{
       $response->getBody()->write("olá Mundo");
       
       return $response;
    }

    public function insertProduto(Request $request, Response $response, array $args): Response{
        $response->getBody()->write("olá Mundo");
        
        return $response;
    }

    public function updateProduto(Request $request, Response $response, array $args): Response{
       $response->getBody()->write("olá Mundo");
       
       return $response;
    }

    public function deleteProduto(Request $request, Response $response, array $args): Response{
        $response->getBody()->write("olá Mundo");
        
        return $response;
    }

}
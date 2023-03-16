<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;
use App\DAO\ClientesDAO;
use App\Models\ClientesModel;

final class ClientesController{

    public function getCliente(Request $resquest, Response $response,  array $args): Response{
        $clienteDAO = new ClientesDAO();
        $cliente = $clienteDAO->getAll();

        $response->getBody()->write(json_encode($cliente));
        return $response->withHeader('Content-Type', 'application/json');
    }


}
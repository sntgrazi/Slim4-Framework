<?php

namespace App\Controllers;

use App\DAO\ProdutoDAO;
use App\Models\ProdutoModel;
use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class ProdutoController{

    public function getProduto(Request $request, Response $response, array $args): Response{
        
        $produtoDAO = new ProdutoDAO();
        $produtos = $produtoDAO->getAllProdutos();
       

        $jsonEncode = json_encode($produtos);
        $response->getBody()->write($jsonEncode);
        return $response->withHeader('Content-Type', 'application/json');
    } 

    public function insertProduto(Request $request, Response $response, array $args): Response{
       
        $data = $request->getParsedBody();
        $produtosDAO = new ProdutoDAO();
        $produto = new ProdutoModel();
        $produto->setLojaId($data['loja_id'])
             ->setNome($data['nome'])
             ->setPreco($data['preco'])
             ->setQuantidade($data['quantidade']);
        $produtosDAO->insertProduto($produto);
        
        $response->getBody()->write(json_encode(['message' => 'Produto inserido com sucesso']));
        return  $response->withHeader('Content-Type', 'application/json');
    }

    public function updateProduto(Request $request, Response $response, array $args): Response{
        $data = $request->getParsedBody();
        $produtosDAO = new ProdutoDAO();
        $produto = new ProdutoModel();
        $produto->setLojaId($data['loja_id'])
             ->setNome($data['nome'])
             ->setPreco($data['preco'])
             ->setQuantidade($data['quantidade'])
             ->setId($data['id']);
        $produtosDAO->updateProduto($produto);
        
        $response->getBody()->write(json_encode(['message' => 'Produto atualizado com sucesso']));
        return  $response->withHeader('Content-Type', 'application/json');
    }

    public function deleteProduto(Request $request, Response $response, array $args): Response{
       
        $data = $request->getParsedBody();

        $produtosDAO = new ProdutoDAO();
        $produto = new ProdutoModel();
        $produto->setId($data['id']);
        $produtosDAO->deleteProduto($produto);

        $response->getBody()->write(json_encode(['message' => 'Produto deletado com sucesso']));
        return  $response->withHeader('Content-Type', 'application/json');
    }

}
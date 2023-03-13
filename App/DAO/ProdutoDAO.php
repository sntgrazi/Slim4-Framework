<?php

namespace App\DAO;

use App\Models\ProdutoModel;

class ProdutoDAO extends Conexao{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProdutos(): array
    {
        $sql = "SELECT * FROM produtos";
        $produtos = $this->pdo
                ->query($sql)
                ->fetchAll(\PDO::FETCH_ASSOC);

        return $produtos;
    }

    public function insertProduto(ProdutoModel $produto): void 
    {
        $sql = "INSERT INTO produtos (loja_id, nome, preco, quantidade) VALUES (:loja_id,:nome,:preco,:quantidade)";
        
        $stm = $this->pdo
        ->prepare($sql);

        $stm->execute([
            'loja_id' => $produto->getLojaId(),
            'nome' => $produto->getNome(),
            'preco' => $produto->getPreco(),
            'quantidade' => $produto->getQuantidade()
        ]);
    }

    public function updateProduto(ProdutoModel $produto): void
    {
        $sql = "UPDATE produtos SET loja_id = :loja_id, nome = :nome, preco = :preco, quantidade = :quantidade WHERE id = :id";

        $stm = $this->pdo
            ->prepare($sql);

        $stm->execute([
            'loja_id' => $produto->getLojaId(),
            'nome' => $produto->getNome(),
            'preco' => $produto->getPreco(),
            'quantidade' => $produto->getQuantidade(),
            'id' => $produto->getId()
        ]);
    }

    public function deleteProduto(ProdutoModel $produto): void 
    {
        $sql = "DELETE FROM produtos WHERE id = :id";

        $stm = $this->pdo
                    ->prepare($sql);

        $stm->execute(['id' => $produto->getId()]);
    }
}


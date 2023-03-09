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
        $lojas = $this->pdo
                ->query($sql)
                ->fetchAll(\PDO::FETCH_ASSOC);

        return $lojas;
    }

    public function insertProduto(ProdutoModel $produto): void 
    {
        $sql = "INSERT INTO produto VALUES (null,:loja_id,:nome,:preco,:quantidade)";
        
    $stm = $this->pdo
            ->prepare($sql);

    
    }

}


<?php

namespace App\DAO;

use App\Models\LojaModel;

class LojasDAO extends Conexao{

    public function __construct()
    {
        parent::__construct();
    }


    public function getAllLojas(): array{
        $sql = 'SELECT * from lojas';
        $lojas = $this->pdo
                ->query($sql)
                ->fetchAll(\PDO::FETCH_ASSOC);

        return $lojas;
    }

    public function insertLoja(LojaModel $loja): void{
       
       $sql = 'INSERT INTO lojas VALUES (null, 
        :nome,
        :telefone,
        :endereco)';

        $statement = $this->pdo
            ->prepare($sql);
        
        $statement->execute([
            'nome' => $loja->getNome(),
            'telefone' => $loja->getTelefone(),
            'endereco' => $loja->getEndereco()
        ]);
    }

    public function updateLoja(LojaModel $loja): void {

        $sql = 'UPDATE lojas SET nome = :nome, telefone = :telefone, endereco = :endereco WHERE id = :id';

        $statement = $this->pdo
        ->prepare($sql);

        $statement->execute(['nome' => $loja->getNome(),
                            'telefone' => $loja->getTelefone(),
                            'endereco' => $loja->getEndereco(),
                            'id' => $loja->getId()]);
    } 

    public function deleteLoja(LojaModel $loja): void 
    {
        $sql = 'DELETE FROM lojas WHERE id= :id';

        $statement = $this->pdo
                    ->prepare($sql);

        $statement->execute(['id' => $loja->getId()]);
    }

}
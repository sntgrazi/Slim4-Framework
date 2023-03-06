<?php

namespace App\DAO;

class LojasDAO extends Conexao{

    public function __construct()
    {
        parent::__construct();
    }


    public function getAllLojas(): array{
        $sql = 'SELECT * from lojas ';
        $lojas = $this->pdo
                ->query($sql)
                ->fetchAll(\PDO::FETCH_ASSOC);

        return $lojas;
    }
}
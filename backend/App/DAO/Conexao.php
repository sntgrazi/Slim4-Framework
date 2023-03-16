<?php

namespace App\DAO;

abstract class Conexao{

    protected $pdo;

    public function __construct()
    {
        $host = 'localhost';
        $port = '3307';
        $user = 'root';
        $pass = '';
        $dbname = 'banco_petshop';

        $dsn = "mysql:host={$host};dbname={$dbname};port={$port}";

        $this->pdo = new \PDO($dsn, $user, $pass);
        $this->pdo->setAttribute(
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION
        );
    }

}

<?php 

namespace App\DAO;

use App\Models\ClientesModel;

class ClientesDAO extends Conexao{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll(): array
    {
        $sql = 'SELECT * from clientes';
        $clientes = $this->pdo
                    ->query($sql)
                    ->fetchAll(\PDO::FETCH_ASSOC);

        return $clientes;
    }


}
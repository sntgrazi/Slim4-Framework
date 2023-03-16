<?php


namespace App\Model;

final class ClientesModel{

    private $id;
    private $nome;
    private $cpf;
    private $telefone;
    private $cep;
    private $rua;
    private $n_casa;
    private $bairro;

    public function getId(): int{
       return $this->id;
    }

    public function setId(int $id): ClientesModel{
        $this->id = $id;
        return $this;
    }

    public function getNome(): string{
        return $this->nome;
     }
 
     public function setNome(string $nome): ClientesModel{
         $this->nome = $nome;
         return $this;
     }
     
    public function getCpf(): string{
        return $this->cpf;
     }
 
     public function setCpf(string $cpf): ClientesModel{
         $this->cpf = $cpf;
         return $this;
     }
     
    public function getTelefone(): string{
        return $this->telefone;
     }
 
     public function setTelefone(string $telefone): ClientesModel{
         $this->telefone = $telefone;
         return $this;
    }

    public function getCep(): string{
        return $this->cep;
     }
 
     public function setCep(string $cep): ClientesModel{
         $this->cep = $cep;
         return $this;
     }
     
    public function getRua(): string{
        return $this->rua;
    }
 
     public function setRua(string $rua): ClientesModel{
         $this->rua = $rua;
         return $this;
    }
     
    public function getN_casa(): string{
        return $this->n_casa;
    }
 
     public function setN_casa(string $n_casa): ClientesModel{
         $this->n_casa = $n_casa;
         return $this;
    }
     
    public function getBairro(): string{
        return $this->bairro;
     }
 
     public function setBairro(string $bairro): ClientesModel{
         $this->bairro = $bairro;
         return $this;
     }

}
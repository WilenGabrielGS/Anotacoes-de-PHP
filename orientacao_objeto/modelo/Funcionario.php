<?php

namespace modelo;

class Funcionario extends Pessoa {
    //não é necessário mais duplicar os atributos que se encontram em pessoa 
    private string $cargo;

    public function __construct($nome, $cpf, $cargo){
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    public function recuperaCargo():string{
        return $this->cargo;
    }
}
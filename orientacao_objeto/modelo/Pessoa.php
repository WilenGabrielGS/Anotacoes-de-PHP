<?php 

namespace modelo;

class Pessoa{
    public $nome;
    public $cpf; 

    public function __construct(string $nome, CPF $cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome():string{
        return $this->nome;
    }

    public function recuperaCpf():string{
        return $this->cpf;
    }

    //adicionando validação de nome:
    public function validaNome($nome){ //o método foi definido como private pois como se trata de uma validação, não preciso ter acesso a ele
        if(strlen($nome)<5){
            echo 'O nome precisa ter mais que 5 caracteres.'.PHP_EOL;
        }else{
            $this->nome = $nome;
        }
    }
}
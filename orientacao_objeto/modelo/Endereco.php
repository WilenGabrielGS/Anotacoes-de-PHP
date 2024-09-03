<?php

namespace modelo;

class Endereco{
    private string $cidade;
    private string $bairro;
    private string $rua; 
    private string $numero; //foi definido como string pois temos vários tipos de números de casas como 71B e, também, este não é um atributo em que será necesrrário realizar um cálculo, logo pode ser uma string

    public function __construct(string $cidade, string $bairro, string $rua, string $numero){
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade():string{
        return $this->cidade;
    }

    public function recuperaBairro():string{
        return $this->bairro;
    }

    public function recuperaRua():string{
        return $this->rua;
    }

    public function recuperaNumero():string{
        return $this->numero;
    }

    public function showInfo(){
        echo "cidade: {$this->cidade} <br>
              bairro: {$this->bairro} <br>
              rua: {$this->rua} <br>
              numero: {$this->numero} <br>";
    }

} 
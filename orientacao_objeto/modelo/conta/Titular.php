<?php 

/*
    esse arquivo é nada mais nada menos do que apenas a definição da classe titular (cliente) que será usada no arquivo "criando_metodos"
 */

 namespace modelo\conta; //o nome modelo que foi atribuido ao namespace pode ser qualquer um, porém foi usado esse pois as classes atuais são modelos.

class Titular extends Pessoa{  //extende <classe> significa que a primeira classe é um complemento daquilo que foi definido na segunda
    private string $endereco;

    public function __construct(string $cpf, string $nome, string $endereco){
        $this->cpf = $cpf;
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }


    public function recuperaEndereco():string{
        return $this->endereco;
    }

}



?>
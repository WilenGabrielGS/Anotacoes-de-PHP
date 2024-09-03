<?php
/*
    Agora que eu sei criar uma classe para criar também objetos do tipo dessa classe, eu preciso saber definir os dados que esse objeto vai poder receber. Para isso, eu preciso,
    antedes de implementar as váriaveis de dados, mostrar se esses dados, ou atributos, serão públicos (public) ou privados (private) escrevendo essas palavras chaves antes
    da definição da variável. Importante anotar que eu posso também definir o tipo se dado que virá nesse atributo para evitar que problemas relacionados a esses tipos de dados
    aconteçam.

    Para definir os valores dos atributos de um objeto no PHP, eu utilizo uma sintaxe diferente das outras já vistas. escrevo o nome do meu objeto seguido de uma flechinha e
    em seguida eu escrevo o nome do atributo e o valor que eu vou definir. Sintaxe completa:
    $<objeto> -> <atributo> = <valor>;
    
*/


class Conta{
    public string $cpfTitular;
    public string $nomeTitular;
    public float  $saldo;
    
}

#por curiosidade eu vou definir uma função que facilite a definição dos atributos da minha conta para ver se funciona:
function define_atributos($conta, $saldo, $cpf, $nome){
    $conta -> saldo = $saldo;
    $conta -> cpfTitular = $cpf;
    $conta -> nomeTitular = $nome;
}

$primeiraConta = new Conta();

/*
antiga definição de atributos:

$primeiraConta -> saldo = 200;
$primeiraConta -> cpfTitular = '123.456.789-10';
$primeiraConta -> nomeTitular = 'Wilen Gabriel';
*/

#aplicando a função pra ver se funciona:
define_atributos($primeiraConta, 200, '123.456.789-10', 'Wilen Gabriel'); #o objeto $primeiraConta deve já ter sido instanciado anteriormente para funcionar na função

var_dump($primeiraConta);  #DEU CERTO KKKKKK

$segundaConta = new Conta();
define_atributos($segundaConta, 2500.50, '987.654.321-01', 'Emilly Julia');

var_dump($segundaConta);

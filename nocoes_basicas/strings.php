<?php

/*
    No php, temos algumas regrinhas a seguir para que nossas strings funcionem da melhor maneira. A prieira delas 
    é saber quando usar uma aspas dupla e quando usar aspas simples, pois quando se usa apenas as aspas simples, ele entende que 
    não precisa interpretar mais nada lá dentro pois tudo que foi escrito será uma string. Já quando se usa aspas duplas, é como 
    se eu dissesse para o php que eu quero que ele interprete caracteres especiais dentro da minha string, possibilitando o uso 
    da quebra de linha.

    A quebra de linha também é feita pelo comando "\n", como em outras linguagens.
*/

// concatenar strings 
$nome = "wilen";
$idade = 17;

echo "olá, meu nome é ", $nome, " e eu tenho ", $idade, "anos \n";

//também é possivel utilizar a tecnica aprendida em python de usar chaves com as variaveis dentro. também é possível não utilizar 
// as chaves
echo "o seu nome é {$nome} e voce tem {$idade} anos"; 
?>

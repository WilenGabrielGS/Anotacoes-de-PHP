<?php

/*
    Vamos supor que eu tenha um texto que vem com palavrões e eu preciso substituir essas palavras indesejadas por algum outro caractere. Para isso, eu posso utilizar a função 
    str_replace() que recebe como parâmetro tres coisas: o que vou substituir, pelo que vou substituir, onde vou substituir. Importante anotar que quando eu quero substituir
    mais de uma palavra na minha string eu devo ao invés de usar strings nos parâmetros, usar arrays que contenham as strings a serem usadas.

*/

$texto = 'Texto com qualquer coisa poxa e caramba\n';

echo str_replace(['poxa','caramba'], '!@*', $texto).PHP_EOL;

/* também posso substituir as letras que eu desejo dos palavrões para que ainda se possa entendê-los usando a função strtr() que recebe como parâmetros: a string de onde vamos
substituir, o que vamos substitui e pelo que. Porém, como essa função trabalha com os caracteres da string, TODOS os caracteres passados no parâmetro serão substituídos.*/

echo strtr($texto, 'poxa', 'p*x@').PHP_EOL;

/*
    Também há uma variação dessa função que me permite substituir palavras. Para usá-la é necessário que eu passe dois parâmetros: a string base de onde eu vou substituir as
    palavras; um array relacional que contenha como chave o que eu vou substituir e como valor "pelo que eu vou substiuir". 
*/

echo strtr($texto, ['poxa' => 'p*x@', 'caramba' => 'c@r@mb@']);
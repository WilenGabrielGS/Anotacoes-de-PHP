<?php

$nome = 'Wilen Gabriel Godoy dos Santos';
/* Vamos supor que eu queira identificar em outros nomes se a pessoa faz parte da minha família eu devo verificar se alguma parte da 
string do meu nome está em outra string que representa o nome de outra pessoa. para fazer essa verificação, eu posso utilizar o comando 
str_contains(<var>, 'string'), que recebe como primeiro parâmetro a variável ou string que contém a string que eu vou verificar e como o
segundo parâmetro o pedaço do texto que eu quero saber se está contido dentro da string. */
$ehDaMinhaFamilia = str_contains($nome, 'dos Santos');

if ($ehDaMinhaFamilia){
    echo "$nome é da minha família".PHP_EOL;
} else {
    echo "$nome não é da minha família".PHP_EOL;
}; 




?>
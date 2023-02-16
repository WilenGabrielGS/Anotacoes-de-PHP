<?php
/*
    Vamos supor que eu queira separar um nome em strings diferentes para poder manipular as partes desse nome individualmente. Para 
    separar uma string em várias, eu utilizo o comando explode() que recebe como primeiro parâmetro o "separador", nesse caso o espaço,
    e como segundo parâmetro a string que será separada. Interessante anotar, que para um melhor funcionamento da função, convém utilizá-
    la juntamente com a função list() que irá me proporcionar as variáveis que irão receber as strings criadas pela função explode.
*/

$nome = "wilen gabriel";
list($nome, $sobrenome) = explode(' ', $nome);

echo "nome: $nome".PHP_EOL;
echo "sobrenome: $sobrenome".PHP_EOL.PHP_EOL;

$csv = 'Wilen Gabriel, 18, wilengabriel@gmail.com'; #csv é o nome do arquivo no qual o conteúdo é separado por vírgulas
list($usuario, $idade, $email) = explode(',', $csv);

echo "user:{$usuario}; age:{$idade}; email:{$email}".PHP_EOL;


$nome2 = 'Emilly Oliveira';

list($nome1, $sobrenome1) = explode(' ', $nome2);

echo $nome1;

echo '1' + '1';
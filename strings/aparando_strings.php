<?php

/*
    Vamos supor que eu tenha uma string que conténha espaços mas eu preciso manipulá-la sem os mesmos. Por isso, eu posso utilizar a 
    função trim() que por padrão recebe a string como parâmetro e remove seus espaços, mas eu posso também especificar o caractere 
    que eu desejo que seja removido da minha string ao passá-lo como segundo parâmetro. Importante notar que a função em questão remove
    os elementos que estão apenas no começo ou no final da string, sendo assim, eu não preciso me preocupar se eu tenho algum elemento 
    que eu realmente desejo usar na string sendo passado como parâmetro.
*/

$email = '   wilen.gabriel@unesp.br';

echo trim($email).PHP_EOL;

$csv = ',Wilen Gabriel, 24,';
echo trim($csv, ',').PHP_EOL;

/* Agora, eu preciso levar em consideração que em alguns casos eu apenas quero remover os elementos de um único lado da minha string. 
Para isso, existe a função ltrim() para aparar apenas os elementos do lado esquerdo e rtrim() para os elementos do lado direito*/

echo ltrim($email).PHP_EOL;
echo rtrim($csv, ',').PHP_EOL;
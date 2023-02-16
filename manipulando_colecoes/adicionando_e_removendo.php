<?php
/*
    Tenho várias maneiras de adicionar itens novos a um array. A primeira forma é o comando 'array_push()' que recebe como parâmetro o
array em que eu vou adicionar elementos e em seguida um ou mais elementos separados por vírgulas que serão adicionados ao final do 
array base:
*/

$array = [1,3,5,2,6,7,];
array_push($array, 9, 8);
var_dump($array);

/*
    Se eu quiser adicionar apenas um elemento ao final do array, eu posso utilizar uma outra sitaxe onde eu coloco colchetes logo a fren-
te do nome do array que irá receber o seu novo elemento:
*/
$array[] = 10;
var_dump($array);

/*
    Também existe um comando para adicionar um ou mais elementos no começo do meu array, esse comando é o 'array_unshift()' que recebe
como primeiro parâmetro o array em que serão adicionados os valores que serão os proximos parâmetros:
*/
array_unshift($array, 23, 12);
var_dump($array);

/*
    Agora, existe um afunção que pega retorna o primeiro item de um array e em seguida o remove do mesmo, reorganizando o array depois
disso. Esse comando é o 'array_shift()' que recebe como parametro apenas o array base:
*/
echo array_shift($array);
var_dump($array);

/*
    Um outro comando com o mesmo comportamento é o 'array_pop()', porém ao invés de fazer isso com o primeiro elemento, ele faz com 
o último elemento do array.
*/
echo array_pop($array);
var_dump($array);
 
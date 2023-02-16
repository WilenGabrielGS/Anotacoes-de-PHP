<?php

/*
    Nessa aula, vou ver mais algumas funções que podem me ajudar na hora de manipular arrays.
*/

#extract()
/*
    O comando extract me permite criar variáveis separadas automáticamente a partir das chaves de um array relacional, basta passar como 
parâmetro o array em que desejo fazer isso.
*/
$dados = [
    'nome' => 'Wilen',
    'nota' => 9.5,
    'idade' => 18
];
extract($dados);
var_dump($nome); //agora a variável '$nome' passa a existir pois a mesma foi criada apartir do comando extract()


#compact()
/*
    O comando compact me permite fazer o processo inverso do comando extract, criando um novo array apartir do nome de variáveis exis-
tentes, que serão chaves para os seus valores. Esse comando é mais utilizado para passar valores em uma página HTML.
*/
var_dump(compact('nome', 'nota', 'idade')); #o array $dados será recriado


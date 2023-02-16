<?php 
//recapitulando:
/* Para eu definir uma array eu posso utilizar ou a sintaxe de colchetes '$array = [];', sendo a mais comum, ou escrever a tag de array
'$array = array();' */

$array = [
    1 => 'um', /*posso ter uma array relacional utilizando uma chave que se relaciona a um valor, nesse caso o numero se relaciona com 
o seu nome em português. Lembrando sempre que para a chave eu devo ter sempre ou uma string ou um valor inteiro. */
    2 => 'dois',
    3 => 'três'
];


//para percorrer a array
foreach ($array as $numeral => $nomeNumero){
    echo "$numeral em português é: $nomeNumero ". PHP_EOL;
}

echo "Total:". count($array) . PHP_EOL; //count pega o tamanho da array. Pode ser substituido por sizeof($array), que é menos utilizado
?>
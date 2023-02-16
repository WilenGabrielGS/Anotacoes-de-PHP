<?php 

/*podemos colocar como chave de uma array apenas os tipos de valores interiros e texto, pois os outros tipos de valores serão convertidos em
um desses tipos, também, devem ser colocados como chaves valores do mesmo tipo para que os demais itens existentes nas outras chaves da lista
 possam ser apresentados de maneira correta*/

$array = [
    1 => 'a', //int
    '1' => 'b', //string
    1.5 => 'c', //float
    true => 'd', //bool
    /*levando em consideração que os valores serão convertidos, sabemos que a falha na apresentação correta dos valores se dá porque a maioria das
    conversões feitas nas chaves dessa list tem como resultado o valor inteiro "1", por isso seus dados são sempre sobreescritos */
];

foreach($array as $letra){
    echo $letra.PHP_EOL;
}

?>
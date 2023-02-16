<?php 
/* Para fazer o agrupamento de dados, posso utilizar arrays associativas, que é uma forma 
de "mapear" os dados onde tenho o nome de um indice e esse nome me manda pra um valor que
eu quero. para criar esse agrupamento, basta utilizar a estrutura: 'nome_do_campo' => 'dado'
e colocar isso dentro da minha array */


$conta1 = ['titular' => 'Vinicius',
            'saldo' => 1000];

$conta2 = ['titular' => 'Wilen',
            'saldo' => 2500];

$conta3 = ['titular' => 'Emilly',
            'saldo' => 9000];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular']. PHP_EOL;

}

?>
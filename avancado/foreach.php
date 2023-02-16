<?php 

$contasCorrentes = [
                //adicionando os CPFs como indices nas contas
                '123.142.345-62' => ['titular' => 'Vinicius',
                                 'saldo' => 1000],
                '827.918.273-45' =>  ['titular' => 'Wilen',
                                'saldo' => 2500], 
                '872.839.716-45' =>  ['titular' => 'Emilly',
                                'saldo' => 9000]];

//adicionando uma nova conta corrente sabendo sua chave:
$contasCorrentes['231.458.279-56'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
    ];

    foreach($contasCorrentes as $cpf => $conta) { /*o comando foreach é uma maneira de fazer uma função para cada elementode uma lista chamando 
eles por um  novo nome, sem precisarmos contar o numero de elementos existentes na lista, usar uma variável contadora e também não preciso acessar
a variável original.*/
        echo $cpf . ' ' . $conta['titular'].PHP_EOL; //utiliza-se pontos para concatenar
    }
?>




<?php 

function exibeMensagem(string $mensagem){  
    echo $mensagem . '<br>';
}

function sacar($conta, $valor){ 
    if($valor > $conta ['saldo']){
        exibeMensagem("você não pode sacar");
    } else{
        $conta ['saldo'] -= $valor; 
    }
    return $conta;
}

function depositar(array $conta, float $valor):array {
    if ($valor > 0){
        $conta['saldo'] += $valor;
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }

    
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta){
    $conta['titular'] = strtoupper($conta['titular']); //faz todos os caracteres da string ficarem maiusculas
}

function exibeConta (array $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular . Saldo: $saldo</li>";
}

?>
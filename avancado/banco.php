<?php 

//para a execução desse codigo, criar um servidor com o comando de prmpt php -S lecalhost:<porta> e em seguida na barra de pesquisa do navegador pesquisar por "localhost:<porta>/banco.php


require 'funcoes.php'; //adiciona o arquivo de funções como módulo para as funções utilizadas. Posso usar a palavra "include" tbm, mas em caso de estar faltando algo não será apresentado um erro


$contasCorrentes = [
                '123.142.345-62' => ['titular' => 'Vinicius',
                                 'saldo' => 1000],
                '827.918.273-45' =>  ['titular' => 'Wilen',
                                'saldo' => 2500], 
                '872.839.716-45' =>  ['titular' => 'Emilly',
                                'saldo' => 9000]]; 

$contasCorrentes ['123.142.345-62'] = sacar($contasCorrentes ['123.142.345-62'], 500); //saca 500 de vinicius s
$contasCorrentes ['827.918.273-45'] = sacar($contasCorrentes ['827.918.273-45'], 500); // saca 500 de wilen
$contasCorrentes ['123.142.345-62'] = depositar($contasCorrentes ['123.142.345-62'], 1000); //deposita 1000 no vinicius
//$contasCorrentes ['872.839.716-45'] = depositar($contasCorrentes ['872.839.716-45'], -1000 ); //deposita um valor negativo para testar mensagem

//unset($contasCorrentes ['123.142.345-62']); //remove o item da array, nesse caso, a conta do vinicius

//titularComLetrasMaiusculas($contasCorrentes ['827.918.273-45']);
 
/*
//exibe todas as contas com seus dados
echo "<ul>"; //inicia uma lista em html
foreach($contasCorrentes as $cpf => $conta) { 
    exibeConta($conta); //chamada da função exibe mensagem com uma string complexa como parametro
}
echo "</ul>"
*/ //o código a cima foi comentado pois agora, vou usar HTML para fazer a exibição das contas
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta){ ?> <!-- fechei a tag para que o programa possa identificar o html abaixo-->
        <dt>
            <h3><?php echo $conta['titular']?> - <?php echo $cpf;?></h3>
        </dt>
        <dd>
             Saldo: <?= $conta['saldo']; ?> <!-- uma manera alternativa de utilizar o 'echo' é apenas utilizar o sinal '=' que o proprio php vai entender como um comando de exibição -->
        </dd>
        <?php } ?> <!-- necessário fechar a chave do comando 'foreach' que irá triplicar as contas no site pois temos 3 contas atualmente-->
    </dl>
</body>
</html>

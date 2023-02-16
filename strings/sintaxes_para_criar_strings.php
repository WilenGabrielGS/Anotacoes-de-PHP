<?php

/*
    Vamos supor que eu tenho um texto dentro de uma variável onde eu irei quebar linhas. Ao executar o código eu percebo que foram adicionados alguns espaços indesejados quando 
    eu faço a quebra das linhas. Para resolver esse problema, eu tenho duas opções: quebrar a indentação do texto, ou usar uma sintaxe diferente de criação de strings.

    Essa sintaxe diferente consiste em eu dizer pra string que todo o conteúdo que eu estou escrevendo vai fazer parte da string até que ela ache o final. Para isso, basta eu 
    escrever tres sinais de menor "<" e em seguida a palavra "FINAL" para começar uma "tag de final" e depois que eu terminar de escrever todo o conteúdo da string, eu termino 
    a mesma com a mesma tag "FINAL;". Importante anotar que essa sintaxe pode ter a utilização de varoáveis dentro da string sem problemas 
*/

/*string com quebra de linha:

function geraEmail():void{
    $conteudoEmail = 'Olá, funlano(a)!
    
    estamos entrando em contato para
    {motivo do contato}';

    echo $conteudoEmail;
}

geraEmail();
*/

/*string com quebra de indentação:

function geraEmail():void{
    $conteudoEmail = 
'Olá, funlano(a)!
    
estamos entrando em contato para
{motivo do contato}';

    echo $conteudoEmail;
}

geraEmail();
*/


#string com nova sintaxe:
function geraEmail(string $nome):void{
    $conteudoEmail = <<< FINAL
    Olá, $nome!
    
    estamos entrando em contato para
    {motivo do contato}
    FINAL;

    echo $conteudoEmail.PHP_EOL;
}

geraEmail('Wilen');








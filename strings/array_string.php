<?php 
$telefones = ['(24) 99999 - 9999', '(21) 99999 - 9999', '(24) 2222 - 2222'];

/*
    Vamos supor que eu quero exibir esses três telefones de maneira conjunta. Porém, o PHP não consegue exibir os telefones de uma vez 
    só pois são dados separados. Para que isso de fato seja possível, eu preciso utilizar a função implode(), fazendo assim com que 
    todos os itens do array sejam unidos em uma única string. A função explode() espera dois parâmetros, o primeiro é o separador, ou 
    seja o elemento que irá separar os elementos nessa nova string (virgula, quebra de linha, etc), o segundo parâmetro esperado é o 
    próprio array que eu quero utilizar na unificação.
*/

echo implode(PHP_EOL,$telefones);
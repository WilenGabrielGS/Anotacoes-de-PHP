<?php
/*
    O PHP é uma linguagem que contém um conceito chamado strings numéricas, que possibilita que eu faça operações matemáticas apenas utilizando variáveis string. Porém, caso 
    eu tenha alguma string com uma letras ou espaços no meio dos números, essa string deixa de ser numerica e passa a se comportar apenas como texto.
*/

$anoNascimento = '2004';

$idade = 2022 - $anoNascimento;

echo $idade.PHP_EOL;
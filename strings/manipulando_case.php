<?php
/*
    Para esse cenário, eu preciso deixar o nome de um usuário todo em letras maiúsculas. para isso uso a função
    strtoupper(). Importante anotar que as funções que modificam strings não modificam a string original mas sim 
    retornam uma nova string modificada
*/

$usuario = 'wilen gabriel';

echo strtoupper($usuario).PHP_EOL;

//para letras minusculas eu utilizo a função strtolower():
$nome = 'EMILLY OLIVEIRA';

echo strtolower($nome).PHP_EOL;

/*IMPORTANTE: assim como na verificação de tamanho, a manipulação de cases de string também tem problemas com
caracteres maiores que 1 byte. Para corrigir isso eu preciso usar a biblioteca mbstring, onde os codigos ficarão
mais menos assim: mb_strtoupper. 

Nota: procurar como habilitar essa biblioteca no PHP para configurar em outras máquinas quando eu precisar.
*/ 

$str = 'áÉí';
echo mb_strtoupper($str); //agora meu código passa a funcionar
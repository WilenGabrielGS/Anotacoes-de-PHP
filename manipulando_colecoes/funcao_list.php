<?php 

/*
    Em algumas linguagens de programação, eu tenho um tipo de lista chamada 'tupla' onde todas as posições de seus dados tem um deter-
minado significado. porém, como o php não tem esse tipo de lista, eu preciso criar variáveis que dêm significado ao meu array ou uti-
lizar alguma função de lista.
    A função de lista chama-se 'list()' e recebe como parâmetros as variáveis que representarão as posições de um determinado array.
Essa função também deve receber o array que contém os dados nas mesmas posições em que eu colocar os parâmetros:
 */

 $dados = ['Wilen', 10, 18]; //nesse array eu quero que os dados sejam organizados da forma: nome, nota, idade
 list($nome, $nota, $idade) = $dados; //por isso os parâmetros da minha função list devem ser nesse formato também
 var_dump($nome, $nota); //interessante que como as variáveis são separadas, eu posso utillizar apenas as que eu preciso na hora

// Também existe uma sitaxe alternativa que me permite ter o mesmo resultado:
$dados2 = ['Emilly', 10, 17];
[$nome, $nota, $idade] = $dados2;
var_dump($nome, $idade);

/*
    Também é possível utilizar a função list com arrays relacionais. Porém, algo que deve sempre ser lembrado é que a função também pre-
sisa saber quais são as chaves, logo as mesmas devem se relacionar com os parâmetros também:
 */
$dados3 = [
    'nome' => 'Wagner',
    'nota' => 9.5,
    'idade' => 42
];

['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados3;
var_dump($nome, $idade);
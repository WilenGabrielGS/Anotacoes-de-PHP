<?php 

$notas = ['Maria' => 10, 
          'Vinicius' => 8,
          'Wilen' => 9,
          'Emilly' => 7,
          'João' => 6];

/*para que eu não perca os nomes dos meus alunos quando as notas forem ordenadas eu preciso usar asort() ou arsort()
pois o mesmo significa 'associative sort', ou seja, o comando me ajuda a ordenar arrays associativos*/
echo 'ordenação por valores: '.PHP_EOL;
arsort($notas); //ordena as notas no modo inverso, ou seja, decrescente
var_dump($notas);

/*para ordenar utilizando as chaves eu posso utilizar o ksort() que será 'key sort', ou seja, agora minhas notas serão ordenas de acordo
com a ordem alfabética dos nomes dos alunos. */
echo 'ordenação por chaves: '.PHP_EOL;
ksort($notas); //também pode ser reversa com krsort() ou ordenada por critérios com uksort()
var_dump($notas);

?>
<?php 
$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria'
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'
];

/*
    Para criar um novo array apartir da junção desses dois primeiros, posso usar o comando 'array_merge()' que irá juntar as arrays que 
ele receber como parâmetro. Porém essa função nãe preserva as chaves se as mesmas forem numéricas e, no caso das chaves string, os 
valores que conterem chaves iguais ao segundo array no primeiro array serão substituídas pelos valores do segundo.
*/

$alunos2022 = array_merge($alunos2021, $novosAlunos);
var_dump($alunos2022);

/*
    existe também uma outra maneira de unir os arrays com um comportamento bem diferente. Para isso basta utilizar o sinal de '+' que
irá unir os dois arrays, porém os valores que tiverem a mesma chave do primeiro array no segundo serão completamente ignorados.
*/

$alunos2023 = $alunos2021 + $novosAlunos;
var_dump($alunos2023); #nota-se que aqui os nomes do segundo array nem apareceram, pois tecnicamente eles tem a mesma chave, ou índice, dos nomes do primeiro


/*
    Agora, há uma outra maneira de criar um array apartir de outros, que é utilizando um conceito chamado de "empacotamento", ou seja,
utilizando reticências '...' antes do meu array, eu consigo dizer para o php que agora os valores contidos nesse array podem ser utili-
zados de maneira individual.
*/

$alunos = [...$alunos2021, 'Wilen',...$novosAlunos]; #a execução é a mesma do array_merge(), porém aqui nesse comando eu posso adicionar novos números entre os arrays
var_dump($alunos);

/*
    Interessante anotar que o operador '...' pode ter outro significado dependendo daquilo que eu desejo fazer no meu programa. Um
exemplo disso, é que se eu usar esse operador em uma função, ele tem a execução totalmente oposta onde ele junta os valores que a minha
função recebe em um novo array. Por isso, nessa nova execução o seu nome também muda para 'spread operator' e não mais 'unpacking ope-
rator'.
*/

?>
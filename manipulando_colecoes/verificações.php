<?php 

$notas = [
          'Maria' => 10, 
          'Vinicius' => null,
          'Wilen' => 9,
          'Emilly' => 7,
          'João' => 6
        ];


# ***************** VERIFICANDO A ESTRUTURA DO ARRAY *******************
/* Vamos dizer agora que eu tenho um código um pouco mau escrito ou quero simplismente saber se uma determinada variável é uma array, 
para isso posso utilizar o comando is_array(<var>) para fazer essa verificação*/

if (is_array($notas)){
    echo 'sim, é uma array'.PHP_EOL;
} else {
    echo 'não é uma array'.PHP_EOL;
}

/* Agora, se eu tenho um array e quero saber se posso fazer uma strutura de for 'normal', ou seja, se as chaves desse array são todas
numéricas sendo crescentes começando de zero (estrutura de lista) posso utilizar o comando array_is_list(<var>) que irá me retornar
'true' se todos esses critérios forem corretos*/ 
var_dump(array_is_list($notas)); //será retornado 'false' pois a array em questão não tem estrutura sequencial de lista


# *************** VERIFICANDO EXISTENCIA DE UMA KEY ********************
/* Nesse exemplo vou verificar se uma chave existe dentro de um array utilizando o comando array_key_exists('chave', <array>)
*/
echo 'Wilen fez a prova: ';
var_dump(array_key_exists('Wilen', $notas)); //retornará 'true' pois existe um aluno chamado Wilen dentro da array

/* Porém, quando eu tenho um array que veio de outro lugar, por exemplo uma pagina da web ou um formulário, nem sempre eu tenho o contro-
le de quais valores vão estar dentro do array. Nesse contexto, olhando para a linha 4 eu vejo que tenho um valor nulo, o que me mostra
que, nesse caso, o Vinicius pode não ter ido fazer a prova, por isso meu código pode estar errado se eu utilizar somente os comandos 
acima. Por isso posso verificar se o nome dele está dentro da array de um jeito diferente, utilizando o comando isset(array['chave'])
verificando se a chave existe dentro do array e se o seu valor é ou não nulo (retorna 'false' se o valor for nulo)*/
echo 'Vinicius fez a prova: ';
var_dump(isset($notas['Vinicius'])); //retorna 'false' pois a chave 'Vinicius' tem um valor nulo, significando que não fez a prova

# ***************** VERIFICANDO UM VALOR DE UMA ARRAY *************************
/* Agora, vou verificar se algum dos alunos tirou nota 10. Para verificar a existencia de um determinado valor dentro da array é neces-
sário utilizar o comando in_array(<valor>, <array>).
*/
echo 'alguém tirou 10?'.PHP_EOL;
var_dump(in_array(10, $notas)); //retorna 'true' se em alguma das chaves existir o valor 10

# ************** ENCONTRANDO A CHAVE ATRAVÉS DO VALOR **************
/* Agora vamos supor que eu tenho a nota 10 mas quero saber quem foi que tirou a nota 10. Para isso devo utilizar o comando arra_search(valor, <array>)
que irá me retornar a chave que contém o valor passado como parâmetro
*/
echo 'quem tirou 10?'.PHP_EOL;
echo array_search(10, $notas); //mostra a chave que tem o valor 10 dentro da array de notas



/* RESUMO DOS COMANDOS APRENDIDOS:
- array_key_exists = verifica se a chave existe
- in_array = verifica se o valor existe
- isset = verifica se a chave existe e não é nula
- array_search = procura uma chave baseada no valor que eu já tenho 
*/

?>
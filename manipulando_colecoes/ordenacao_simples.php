<?php 
/*
$notas = [10, 8, 9, 7];

// Para ordenar esse array dem um critério de ordenação, posso utilizar o comando sort() que irá me retornar a array ordenada em modo crescente
$notasOrdenadas = $notas; //foi necessário copiar as notas pois o comando sort ordena a array original e isso pode não ser o que eu quero
sort($notasOrdenadas);

echo "Desordenadas:";
var_dump($notas);


echo "Ordenadas:";
var_dump($notasOrdenadas);*/

//Agora, vou me aprofundar um pouquinho criando um critério de ordenação:

$notas = [
    ['aluno' => 'Maria',
    'nota' => 10],
    ['aluno' => 'Vinicius',
    'nota' => 6],
    ['aluno' => 'Wilen',
    'nota' => 9]
];

function ordenaNotas(array $nota1, array $nota2): int{
    /*
    if ($nota1['nota'] > $nota2['nota']){
        return -1;
    }

    if ($nota2['nota'] > $nota1['nota']){
        return 1;
    }

    return 0;*/
    //tudo isso pode ser substituido por:
    return $nota1['nota'] <=> $nota2['nota'];
}
/*
 Foi criado como critério de ordenação a função 'ordenaNotas' que ensina ao PHP como ordenar as notas retornando um valor inteiro que 
seja referente a posição da nota, sendo negativo quando o primeiro parâmetro precisar vir pimeiro, positivo quando o segundo parâmetro
precisar vir primeiro e zero quando forem iguais.
 */



usort($notas, 'ordenaNotas'); /*a função 'usort' significa 'user sort', ou seja, eu quem preciso dar o critério de ordenação para ela. 
Essa função recebe como parâmetros a array a aser ordenada e uma função que seja o critério, nesse caso foi a função 'ordenaNotas' que 
foi passada apenas como string pois o PHP é inteligente o suficiente para entender e executá-la.*/
var_dump($notas);

?>
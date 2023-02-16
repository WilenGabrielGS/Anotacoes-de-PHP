<?php 

$notasBimestre1 = ['Maria' => 10, 
          'Vinicius' => 6,
          'Wilen' => 9,
          'Emilly' => 7,
          'João' => 6];

$notasBimestre2 = [
            'Vinicius' => 6,
            'Wilen' => 9,
            'Emilly' => 7,
            'João' => 7];                                               

/* 
    Vamos supor que agora eu queira saber a diferença entre as notas das arrays acima. Para isso posso usar o comando array_diff(<array base>, <outras arrays>)
que me retornará a chave que tem o VALOR diferente ou inexistente nas outras arrays passadas como parâmetro.
*/
var_dump(array_diff($notasBimestre1, $notasBimestre2)); //retorna que João tem valor diferente e Vinicius não tem valor na segunda

/*
    Agora, se eu quero apenas saber qual chave não está presente nas outras arrays posso usar o comando array_diff_key(), que irá ig-
norar completamentamente os valores das chaves mas verificar se ela está ou não nos arrays
*/
var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); //retorna que o vinicius não está presente no segundo array 

/*
    Utilizando o mesmo pensamento, se agora eu quiser comparar os arrays levando em consideração a chave e o valor, para saber quem au-
mentou sua nota por exemplo, posso usar o comando array_diff_assoc().
*/
var_dump(array_diff_assoc($notasBimestre1,$notasBimestre2)); //retorna que joão teve sua nota aumentada

/*
    Agora, vamos supor que eu queira obter somente o nome dos alunos faltantes. Para isso, eu posso criar uma variável que receba o co-
mando array_diff_key() para que eu tenha uma array com os alunos faltantes e suas notas, porém como eu só quero o nome, posso utilizar 
o comando array_keis() que retorna somente as chaves de uma array:
*/
$faltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump(array_keys($faltantes)); //retorna uma array contendo somente a chave presente na array de alunos faltantes

// Da mesma maneira consigo ter apenas os valores de uma determinada array com o comando array_value():
var_dump(array_values($notasBimestre1));


/*
    Agora que eu sei como separar o que eu quero de uma array, posso combinar dois arrays dizendo quem eu quero que seja a chave e o valor,
utilizando para isso o comando array_combine(<array chave>, <array valor>). Importante lembrar que os dois arrays precisam ter o mesmo
tamanho para serem combinados.
*/

$nomesAlunos = array_keys($notasBimestre2);
$notasAlunos = array_values($notasBimestre2);

var_dump(array_combine($notasAlunos, $nomesAlunos));

// Também posso apenas inverter a chave e o valor de uma array com o comando array_flip():
var_dump(array_flip($faltantes));





?>

<?php 

$email = 'wilengabriel@gmail.com';

/*Vamos supor agora, que eu queira extrair o nome de usuário baseado no e-mail que foi passado na variável. Para isso, seria necessário 
que eu tivesse algum comando que recortasse a string desde a posição inicial até o arroba. O comando que cria uma substring a partir 
de uma string maior é o substr(<var ou string>, <pos. inicial>, <pos. final>)*/

//echo substr($email, 0, 12).PHP_EOL;

/*Porém para essa aplicação não é tão bom que eu tenha que colocar as posições diretamente à mão pois o que funcionará para uma string 
não funcinará para outra devido a variação de tamanhos. Por esse motivo seria interessante que eu tivesse uma função que busca a posi-
ção de um determinado string ou caractere. A função em questão é a strpos(<var>, 'string') */

//agora eu utilizo a função strpos() para achar a posição do arroba;
$posicao_arroba = strpos($email, '@');
echo $posicao_arroba.PHP_EOL;

//indo mais além, posso agora pegar a substring que retornará o nome de usuário:
echo substr($email, 0, $posicao_arroba).PHP_EOL; //com isso eu tenho o nome de usuário idependente do tamanho do email 
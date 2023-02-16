<?php 

$idadeList = [21,32,41,25,53,4]; 

for ($i=0; $i<count($idadeList); $i++){
   echo $idadeList[$i] .PHP_EOL;
}

/*para saber i numero de elementos em uma lista, basta utilizar o comando 
count(lista); */

echo "tamanho da lista: ", count($idadeList);

?>
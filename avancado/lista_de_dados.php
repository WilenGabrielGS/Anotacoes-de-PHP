<?php
// para criar e manipular uma array, usa-se o mesmo padrão do python
$idadeList = [21,32,41,25,53,4]; 
$primeiraIdade = $idadeList[0];
$terceiraIdade = $idadeList[2];

list($idadeVinicius, $idadeWilen, $idadeEmy) = $idadeList; //a função list recebe variaveis e faz com que o valor que for atribido a elas e coloca-los nos devidos indices respectivos

echo "A primeira idade é $primeiraIdade e a terceira idade é $terceiraIdade";

?>
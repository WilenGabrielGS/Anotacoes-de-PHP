<?php 

//validacao de idade para entrada em um evento 

$idade = 16;
$acompanhado = true;

if ($idade < 18 and $acompanhado == false)
    echo "Voce tem $idade. Deve ser maior do que 18 anos para poder entrar ou estar acompanhado \n";    
/*nao foi necessario o uso de chaves pois só tenho uma unica linha de instrução depois da decisão. Porém, é uma 
boa prática utilizar as chaves para uma melhor legibilidade.*/

else if($idade < 18 and $acompanhado == true)
    echo "Voce tem $idade anos mas está acompanhado. Pode entrar \n";

else
    echo "Voce tem $idade anos. Pode entrar \n";


?>
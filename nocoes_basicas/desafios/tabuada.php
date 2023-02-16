<?php 

$num = rand(1, 10); //gera numeros aleatórios entre 1 e 10

echo "tabuada do $num: \n";
for ($i = 0; $i<=10; $i++){
    $res = $num*$i;
    echo "$num x $i = $res\n";
}
?>
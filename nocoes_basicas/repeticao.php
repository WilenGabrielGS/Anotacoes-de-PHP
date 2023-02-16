<?php 

$contador = 1;

//laço de repetição while, onde eu posso não saber o limite da minha repetição
echo "repetição while: \n";
while ($contador <= 15){
    echo "#{$contador}" . PHP_EOL; //"PHP_EOL" faz a mesma função de "\n"
    $contador += 1; //soma para que uma hora a condição seja falsa e termine o loop 
}

echo "\n\n";

//laço de repetição for, onde eu sei quando eu começo e quando eu termino a minha repetição
echo "repetição for: \n";
for ($contador = 1; $contador <= 15; $contador+=1){
    if ($contador == 5){
        continue; //o numero 5 será pulado e não impresso
    }

    if ($contador == 10){
        break; //assim que o contador for 10, o loop será quebrado
    }

    echo "#{$contador}\n";
}

?>
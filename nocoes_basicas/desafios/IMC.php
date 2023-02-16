<?php 

$peso = 75.15;
$altura = 1.80;
$IMC = $peso / ($altura**2); // "**" quer dizer "elevado"

if ($IMC <= 18.50){
    echo "abaixo do peso.";
}

if ($IMC >= 18.60 and $IMC <= 24.90){
    echo "peso ideal.";
}

if ($IMC > 25.00){
    echo "acima do peso.";
}


?>
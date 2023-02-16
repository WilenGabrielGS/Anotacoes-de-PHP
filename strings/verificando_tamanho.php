<?php 
/*
    vamos supor que eu tenha um campo de senha e um usuário digitou uma senha muito fraca e com menos caracteres do que o preciso. 
    Baseado nessas informações, esse usuário não poderá acessar ou criar sua senha pois ela não está de acordo com os critérios que eu
    desenvolvi e, para que esses critérios realmente funcionem, eu preciso saber o tamanho da string de senha. Para isso, utilizo o 
    comando strlen(<string>)
*/

$senha = '123';
//echo strlen($senha).PHP_EOL;

if (strlen($senha) < 8){
    echo "a senha deve conter 8 caracteres pelo menos.".PHP_EOL;
}

/* IMPORTANTE: a função strlen() mostra o tamanho da string em bytes. Isso significa que quando eu tiver letras com acentos ou caracteres
especiais na minha string, eu terei problemas com o tamanho, já que os mesmos ocupam mais de um byte uma string. */
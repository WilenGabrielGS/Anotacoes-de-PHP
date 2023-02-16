<?php
/* É muito comum que eu tenha que trabalhar com URL's, por isso devo saber quando uma string é ou não uma URL. As URL's começam 
geralmente com "https://", por isso, é bom que eu saiba verificar o começo de um string. Para saber com qual texto uma string começa,
posso utilizar o comando str_starts_with(<var>, 'texto') */

$url = 'https://alura.com.br';

if (str_starts_with($url, 'https')){
    echo 'É uma url segura';
} else {
    echo 'Não é uma url segura';
}

echo PHP_EOL;


#consigo saber também com o que uma determinada string termina. Assim saberei se a url do exemplo é ou não do brasil:
if (str_ends_with($url, '.br')){
    echo 'É um domínio do brasil';
} else {
    echo 'Não é um domínio do brasil';
}
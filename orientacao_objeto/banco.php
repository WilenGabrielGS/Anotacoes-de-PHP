<?php 
//agora que eu modifiquei e adicioni namespaces ao meu projeto, eu preciso mudar os requires para que eles acessem diretamente esses
//namespaces

require_once 'Endereco.php';
require_once 'Titular.php'; //necessário chamar as classes que foram criadas em outros arquivos 
require_once 'criando_metodos.php';

use modelo\Endereco;
use modelo\conta\Titular;


$endereco = new Endereco('Agudos', 'meu bairro', 'minha rua', '205');

$contaWilen = new Conta(new Titular('123.456.789-10', 'Wilen', $endereco)); //como eu criei uma outra classe para ser o titular, é necessário instanciá-la aqui
$contaWilen -> depositar(1000);

$outro_endereco = new Endereco('Agudos', 'bairro B', 'Rua C', "117");
$contaEmy = new Conta(new Titular('321.654.987-10', 'Emilly', $outro_endereco));
$contaEmy -> depositar(3000);

echo Conta::$numeroDeContas;

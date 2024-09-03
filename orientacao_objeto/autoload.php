<?php 

use modelo\Endereco;

/* AUTO LOAD DE CLASSES: 
    Se eu quiser usar uma classe dentro do meu arquivo que o PHP ainda não conhece, eu tenho como fazer um auto load dela. Na prática, para
utilizar classes de outros namespaces eu preciso fazer o comando require e use deles, porém se eu não tiver os comandos requires eu não 
consigo carregar essas classes pra dentro do meu arquivo. Para que eu consiga fazer isso, é necessário que eu tenha uma funcao de autoload.
*/

/* A funcao em questão é a "spl_autoload_register()" que irá receber como parametro uma outra funcao anonima que tem como parametro o nome
completo da classe que eu quero dar o autoload. */

spl_autoload_register(function (string $nomeCompletoDaClasse){
    //echo $nomeCompletoDaClasse; //retorna o nome completo do namespace dessa classe

    //agora, eu preciso que ao invés do nome do meu namespace, a funcao retorne o caminho completo do arquivo onde a minha classe se encontra

    $caminhoArquivo = 'orientacao_objeto'.$nomeCompletoDaClasse;
    $caminhoArquivo  = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if(file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }

    exit();
});


$endereco = new Endereco('Ribeirão Preto', 'Nova Alianca', 'João Perone', 455);
$endereco->showInfo();


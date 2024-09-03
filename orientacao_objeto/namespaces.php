<?php

/*
FAZENDO SEPARACAO LÓGICA E FÍSICA UTILIZANDO NAMESPACE:

    É interessante apontar que em um projeto maior, pode ser que eu tenha arquivos com o mesmo nome, porém em pastas diferentes, e para que
    isso não resulte em futuros erros, eu consigo separar esses arquivos com nomes iguais por "namespaces". A separacao de namespaces é feita
    utilizando a contrabarra, por exemplo "modelo\conta"
 */

/*
NAMESPACE RAÍZ:

    Agora, eu posso utilizar uma estratégia muito boa onde eu consigo utilizar arquivos com o mesmo nome de forma ainda mais saudável para
    o meu código. Consiste em fazer um namespace raíz, ou seja, eu tenho a pasta "master" do meu projeto que será o namespace geral, e todas
    as outras pastas que eu for gerando viram separacoes desse namespace. Por exemplo, se a pasta atual fosse um projeto, utilizando essa 
    estratégia o namespace ficaria assim: namespace orientacao_objeto\ns1\ns2\...;. Ou seja, além de eu ter um namespace cada vez mais específico,
    eu consigo deifinir uma pasta base, que nesse caso é "orientacao_objeto".
*/

/*
UTILIZANDO O NAMESPACE NA PRÁTICA: 

    Para utilizar as classes que estão dentro de um determinado namespace, eu preciso escrever uma linha utilizando o comando "use"
    e o caminho completo de onde está localizada a minha classe. 
*/

/* 
Outro detalhe interessante é que, se precisamos "importar" (com use) mais de uma classe do mesmo namespace, podemos fazer na mesma linha, 
envolvendo os nomes das classes em chaves. Por exemplo:

namespace Alura\Banco\Conta;

use Alura\Banco\{CPF, Endereco};
use \SplFileInfo;

class Conta
{
    public function umMetodoQualquer()
    {
        // ...
        $cpf = new CPF();
        // ...
        $cpf = new Endereco();
        // ...
        $fileInfo = new SplFileInfo();
        // ...
        $fileObject = new \SplFileObject();
        // ...
    }
} 
*/ 
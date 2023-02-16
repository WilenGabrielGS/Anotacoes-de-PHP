<?php

/*
    Expressões regulares são padrões de string que eu posso criar e verificar se estão corretos. Para criar uma regex, primeiro eu preciso do delimitador, que pode ser qualquer
    caractere que esteja no começo e no final da minha expressão, no caso desse arquivo, foram usadas as barras. Em seguida, se eu for utilizar algum caractere especial eu devo 
    obrigatóriamente escrever uma barra invertida antes do mesmo, para que assim esse caractere especial possa ser utilizado representando o seu real significado e não ser in-
    terpretado com o significado que ele tem para as regex. Quando eu for utilizar números, eu coloco os dígitos que podem aparecer entre colchetes e , entre chaves, a quanti-
    dade de números que irão aparecer naquela parte da minha regex, por exemplo, [0-9]{2}, isso indica que eu posso ter dois números de 0 a 9. Caso eu precise utilizar letras
    eu faço o mesmo processo porém utilizando as letras que irão aparecer, por exemplo, se em um determinado local da minha regex eu quero poder utilizar três letras de A a Z,
    eu utilizo: [a-z]{3}. caso eu tenha um caractere separador, como hífens, vírgulas, etc, eu apenas os escrevo normalmente. Importante anotar que, se eu tenho alguma letra ou 
    número que é opcional na minha regex eu utilizo o ponto de interrogação (?) logo a frente do caractere. Outra coisa importante de se lembrar é que nas regex os espaços tam-
    bém serão interpretados como parte da expressão. Para definir que um caractere deve estar no começo da string, posso utilizar o acento circunflexo (^) antes do mesmo, e 
    para o caractere que deve estar no final, eu uso o cifrão ($) logo após o mesmo.
*/

$telefones = ['(24) 99999 - 9999', '(21) 99999 - 9999', '(24) 2222 - 2222'];

foreach($telefones as $telefone){

    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';
    
    $telefoneValido = preg_match($regex, $telefone, $correspondencia);

    if($telefoneValido){
        echo 'Telefone Válido'.PHP_EOL;
    } else {
        echo 'Telefone Inválido'.PHP_EOL;
    }

    //substituição com regex:
    /* Vamos supor que agora eu quero substituir o ddd de (24) para (xx). Para isso eu uso a função preg_replace() que recebe os mesmos parâmetros da função str_replace:
    - o que eu quero substituir?
    - pelo que eu quero substituir?
    - onde eu vou substituir?
    
    */
    echo preg_replace($regex,
                    '(xx) \2', //como eu separei os grupos de captura, posso usar \2 para receber o resultado do segundo grupo de captura
                    $telefone).PHP_EOL;

}
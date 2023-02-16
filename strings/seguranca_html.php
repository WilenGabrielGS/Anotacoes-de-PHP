<?php
/*
    vamos supor que eu tenho um input HTML onde o atributo nome desse input está sendo escrito pelo usuáro ou puxado do banco de dados. Se por acaso esse usuário digitar um 
    código ou caracteres especiais, ele irá atrapalhar a escrita do meu código HTML. Para que isso não aconteça, eu tenho algumas funções de segurança do php. Como por exemplo
    a função htmlentities() que irá converter todos os caracteres especiais aceitos pelo HTML em seus respectivos códigos de entidade, impossibilitando assim que esses có-
    digos indesejados seja executados.
*/

$nome = 'cam" /> <script>alert("teste");</script>';
?>

<input type="text" name="<?php echo htmlentities($nome);?>"/>
<?php

/*
    Para definir os comportamentos de um objeto, eu preciso criar funções, chamadas métodos, que possibilitem que esses comportamentos ocorram. Sempre que eu for criar um 
    método dentro da minha classe, é interessante que, por boa prática da linguagem, eu defina também a sua privacidade, assim como feito com os atributos.

    Agora, para que o meu método acesse um determinado atributo eu preciso do comando '$this->' antes desse atributo. Assim, o PHP vai conseguir distinguir que eu quero utilizar
    o atributo do objeto atual no qual eu executei a função.

    Existe uma regrinha de boas práticas que diz que devemos evitar ao máximo de usar comandos 'else' para uma melhor leitura do nosso código. Para isso, nas funções 'void', ou
    seja, que não retornam valor, eu posso utilizar o comando 'return' dentro do meu laço 'if', assim o laço não será executado caso o seu resultado seja falso e será feito 
    aquilo que estiver abaixo dele.


*/

class Conta{

    /*
        Os atributos dessa classe são definidos como privados pois assim somente as funções presentes na classe podem acessar os mesmos. Isso evita também, que os usuários
        tenham acesso direto a esses atributos sendo necessário que eles somente usem as funções disponíveis para manipular os atributos de uma classe.
    */

    private $titular; //aqui está sendo chamada a minha classe titular criada em um arquivo separado 
    private float  $saldo; #deifine que toda conta nova criada sem definição do saldo na função, terá o 0 como valor padrão

    /*
        Vamos supor que eu queira contar o número de contas que foram criadas apartir dessa clase. Para isso eu preciso de um atributo que 
        possa estar presente em todas os objetos criados mas que funcione apenas para o objeto em sí, mas para todos os objetos de maneira
        conjunta. Chamamos esse atributo de "atributo estático" ou "membro estático" onde, para eu criá-lo, basta que eu defina seu tipo 
        como 'static'. Para acessá-lo dentro de alguma função, eu devo escrever o nome da classe em que se encontra esse membro seguido 
        de '::'. A sintaxe completa é: 
        - definição do membro estático: private static $membroEstatico;
        - chamada do membro estático: Conta::$membroEstático;  //aqui eu posso usá-lo da maneira que melhor implementa a funcionalidade que
        eu preciso 
    */
    public static $numeroDeContas = 0;


    /*
        Logo que eu instanciar um novo objeto, deve ser possível que eu defina os seus atributos. Para isso é necessário que eu chame o método especial '__construct()', que 
        me permitirá já descrever os atributos de um objeto na sua criação:
    */
    public function __construct(Titular $titular){
        $this->titular = $titular;
        $this->saldo = 0; #posso colocar o valor do saldo aqui no construtor para que eu deixe a definição dos atributos acima mais 'limpa'
        
        Conta::$numeroDeContas++; #incrementa 1 ao número de contas criadas
    }
    


    public function sacar(float $valorASacar){
        if($valorASacar > $this->saldo){
            echo 'Saldo Indisponível'.PHP_EOL;
            return;
        }

        $this->saldo -= $valorASacar; #$this é o comando que se refere à conta que está chamando a função
    }

    public function depositar(float $valorADepositar): void{
        if($valorADepositar < 0){
            echo 'O valor precisa ser positivo'.PHP_EOL;
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void{
        if($valorATransferir > $this->saldo){
            echo 'Saldo indisponível'.PHP_EOL;
            return;
        } 

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }


    //agora, não serão mais necessários esses métodos pois eu tenho os mesmos dentro do arquivo da classe titular
    /*
        Para que seja possível que eu acesse o valor atual de algum atributo privado, eu preciso criar um método de acesso que basicamente irá retornar o valor desse atributo
        sem que seja possível editá-lo

    public function mostraCpf():string{
        return $this->cpfTitular;
    }

    public function mostraNome():string{
        return $this->nomeTitular;
    }
    */

    public function mostraSaldo():float{
        return $this->saldo;
    }

    /*
        Agora que eu sei como criar objetos, eu preciso saber também o que acontece para que um objeto seja deletado. Um objeto só é deletado
        quando não existe mais uma instância para ele, ou seja, quando nenhuma variável o referencia mais. Para excluir a instancia, basta 
        usar o método unset(), que recebe como parâmetro a variável que está instanciando um objeto. Quando isso acontece, uma ferramenta
        do PHP é acionada automáticamente e coleta esse "lixo" para deletá-lo, chamamos essa ferramenta de "coletor de lixo". Porém, essa fer-
        amenta funciona de maneira "escondida" e, para que eu possa ter alguma interação no meu código quando a mesma é acionada, eu preciso 
        usar o método destrutor, que tem a mesma sintaxe do método construtor pois é um método especial.
     */
    public function __destruct(){
        self::$numeroDeContas--;
    }

}



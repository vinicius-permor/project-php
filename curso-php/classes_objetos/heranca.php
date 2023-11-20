<div class="titulo"> Herança </div>

<?php

class Pessoa {
    public $nome;
    public $idade;
    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }


    public function apresenta() {
        return "USUARIO: {$this->nome}, {$this->idade}";
    }
}
 class Usuario extends Pessoa
{
    public $login;

    function __construct($nome, $idade, $login) {
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo "usuario criado > ";
    }


    public function apresentando() {
        print " LOGIN: @{$this->login}";
        return parent::apresenta();

    }
}

$user = new Usuario('Marcus Vinicius', '35', 'm.vinicusMoraes');
$user->apresentando();

//chamando o __destruct da classe do tipo usuario
unset($user);

<div class="titulo"> Herança </div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "pessoa criada<br>";
    }

    function __destruct() {
        print "pessoa está destruindo<br>";

    }

    public function apresenta() {
        echo "USUARIO: {$this->nome}, {$this->idade} <br>";
    }
}
 class Usuario extends Pessoa
{
    public $login;

    function __construct($nome, $idade, $login) {
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo "usuario criado<br>";
    }

    function __destruct() {
        echo "Usuario está destruindo<br>";
        parent::__destruct();
    }

    public function apresentando() {
        echo "LOGIN: @{$this->login}<br>";
        parent::apresenta();

    }
}

$user = new Usuario('Marcus Vinicius', '35', 'm.vinicusMoraes');
$user->apresentando();

//chamando o __destruct da classe do tipo usuario
unset($user);

<div class="titulo"> constructor destructor </div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18) {
        echo 'chamando contructor <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'destruindo!<br>';
    }

    public function aprensentar() {
        print "{$this->nome}, {$this->idade} anos<br>";
    }
}

$pessoa1  = new Pessoa('Marcus Vinicius', 29);
$pessoa1->aprensentar();
unset($pessoa1);



$pessoa2  = new Pessoa('Vinicius Pereira', 30);
$pessoa2->aprensentar();
$pessoa2 = null;
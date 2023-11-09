<div class="titulo"> Primeira classe </div>

<?php

class Cliente
{
    public $nome = 'anonimo';
    public $idade = 18;
    public $peso = 70;

    public function apresentar() {
        echo "NOME: {$this->nome} IDADE: {$this->idade} PESO: {$this->peso}<br>";
        //poderia usar tambem o return "NOME: {$this->nome} IDADE: {$this->idade} PESO: {$this->peso}";
    }
}


$c1 = new Cliente();
$c1->nome = 'Marcus Vinicius';
$c1->idade = 29;
$c1->peso = 68;
$c1->apresentar();
print "$c1->nome, <br>";

$c2 = new Cliente();
$c2->nome = 'Pereira de Moraes';
$c2->idade = 30;
$c2->peso = 70;
$c2->apresentar();


//echo $c1->apresentar(), '<br>';
//echo $c2->apresentar(), '<br>';
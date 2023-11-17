<div class="titulo"> Polimorfismo </div>

<?php

abstract class Comida
{
    public $peso;
}

class Arroz extends Comida
{

}

class Feijao extends Comida
{

}
class Sorvete extends Comida
{

}
class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }
    public function comer(Arroz  $comida) {
        $this->peso += $comida->peso;
    }
    public function comerSorvete(sorvete  $comida) {
        $this->peso += $comida->peso;
    }
    public function comerFeijao(feijao $comida) {
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.5;

$c2 = new Sorvete();
$c2->peso = 0.10;

$c3 = new Feijao();
$c3->peso = 0.15;

$p = new Pessoa(83.45);
$p->comer($c1);
$p->comerSorvete($c2);
$p->comerFeijao($c3);
echo $p->peso;
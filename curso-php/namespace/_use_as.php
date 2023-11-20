<?php namespace Outro\Nome; ?>
<div class="titulo"> Use/As </div>

<?php
echo __NAMESPACE__ . '<br>';

include 'use_as_arquivo.php';

function soma($a, $b) {
    return $a . $b; //erro proposital!!!
}

class Classe
{
    public $variavel;

    function funcao() {
        echo __NAMESPACE__ . '->' . __CLASS__ . '->' . __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>';

use const \Nome\Bem\Grande\constante;
echo constante . '<br>';

use Nome\Bem\Grande as ctx;
echo soma(1,2) . '<br>';
echo ctx\soma(1,2) . '<br>';

use function Nome\Bem\Grande\soma as somaReal;

echo somaReal(100,212) . '<br>';

$a  = new Classe();
$a->funcao();

$b = new \Nome\Bem\Grande\Classe();
$b->funcao();

$c = new ctx\Classe();
$c->funcao();

use \Nome\Bem\Grande\Classe as newAlias;
$d = new newAlias();
$d->funcao();
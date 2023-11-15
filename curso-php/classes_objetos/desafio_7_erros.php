<div class="titulo"> 7 erros </div>

<?php

interface Template
{
      function primeiroMetodo($parametro1);
      public function segundoMetodo($parametro2);
}

abstract class ClasseAbstrata implements Template
{
    public function primeiroMetodo($parametro1)
    {
        echo "aqui foi chamado a função da primeiro metodo, $parametro1<br>";
    }
    public function segundoMetodo($parametro2)
    {
        echo "aqui foi chamado a função do segundo metodo, $parametro2<br>";
    }

    public function terceiroMetodo($parametro3)
    {
        echo "estou executando o terceiro metodo, $parametro3<br>";
    }
}
class ClasseConcreta extends ClasseAbstrata
{
    function __construct($parametro) {
        self::primeiroMetodo('trazendo o primeiro metodo usando self');
        self::segundoMetodo('trazendo o segundo metodo usando self');
        parent::terceiroMetodo('usando o terceiro metodo usando parent::');

    }
}

$exemplo = new ClasseConcreta('aqui tem um parametro');
$exemplo->primeiroMetodo('usando o parametro da classe numero 1 ');
$exemplo->segundoMetodo('parametro da segunda função ');
$exemplo->terceiroMetodo('aqui o parametro da 3 função ');
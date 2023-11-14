<?php

class Caligrafia
{
    public $lapis;
    public  $caneta;
    public static $pincel = ' um pincel antigo';

  public function escolhaFerramenta(){
      echo "{$this->lapis}<br>";
      echo "{$this->caneta}<br>";
      echo "ferramenta escolhida" . self::$pincel . "<br>";
  }
  public static function usandoPincel() {
      print "só poderá usar o pincel se for fazer pintura no quadro" . self::$pincel . "<br>";
  }


}


$aluno  = new Caligrafia();
$aluno->lapis = 'aluno está usando lapis';
$aluno->caneta = 'aluno está usando caneta';
$aluno->escolhaFerramenta();

Caligrafia::$pincel = 'um novo pincel foi escolhido';
echo Caligrafia::$pincel;
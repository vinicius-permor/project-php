<?php

class Caligrafia
{
    public $lapis;
    public  $caneta;
    private $pincel;



    function __construct($lapis,$caneta,$pincel) {
        $this->lapis = $lapis;
        $this->caneta = $caneta;
        $this->pincel = $pincel;
        print "escolhendo ferramenta<br>";

    }
  public function escolhaFerramenta(){
      echo "ferramenta escolhida<br>";
      echo "{$this->lapis}<br>";
      echo "{$this->caneta}<br>";
      echo "{$this->pincel}<br>";
  }

  protected function usandoPincel() {
      print "só poderá usar o pincel se for fazer pintura no quadro<br>";
  }


}

class Caderno extends Caligrafia
{
    public function tipoDeMaterial() {
        parent::usandoPincel();
        echo "para usar {$this->lapis} no caderno<br>";
        echo "para usar {$this->caneta} no caderno<br>";
    }
}

$aluno = new Caligrafia('lapis da bic', 'caneta bic', 'pincel faber castel');
$aluno->caneta = '<strong>caneta de galigrafia</strong>, ';
$aluno->lapis = '<strong>lapis de cor "Faber Castel"</strong>';
//$aluno->pincel = '<strong>pincel de tamanho médio</strong>';
$aluno->escolhaFerramenta();



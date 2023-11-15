<div class="titulo">  Modificador Final  </div>

<?php
abstract class Abstrata {
    abstract public function primeiroMetodo();

    public final function segundoMetodo() {  // não pode ter herança
        echo "não vou mudar <br>";
    }
}

class Classe extends Abstrata
{
    public function primeiroMetodo()
    {
       echo "execução do primeiro metodo<br>";
    }

}

$exemplo = new Classe();
$exemplo->primeiroMetodo();
$exemplo->segundoMetodo();

//o mesmo é possivel fazer com classe

// final class ClasseUm
//{
//    public $tributo = 'valor';
//}
//class ClasseDois extends ClasseUm
//{
 //   public $tributoDois;
//}

//$usuario = new ClasseUm();
//$usuario->$tributo;
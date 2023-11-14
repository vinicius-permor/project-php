<div class="titulo"> Membros de classe{Static} </div>

<?php
class NovaClasse
{
    public $naoStatic = 'variavel instancia';
    public static $varEstatica = ' variavel de classe (estatica) ';

    public function mostrarA(){
        echo "Não estatica = {$this->naoStatic}<br>";
        echo "para acessar o membro static da classe " . self::$varEstatica . "<br>";
    }
    public static function mostrandoFuncaoEstatica() {
        echo "acessando funçao,  " . self::$varEstatica . "<br>";
    }
}

//$impressao = new NovaClasse();
//$impressao->mostrarA();
//$impressao->mostrandoFuncaoEstatica();
echo NovaClasse::$varEstatica, '<br>';  //acessando somente o atributo estatico da classe.
NovaClasse::mostrandoFuncaoEstatica(); //acessando diretamente pela classe.

NovaClasse::$varEstatica = 'alternado membro de classe'; // membro de classe alterado
echo NovaClasse::$varEstatica, '<br>'; // imprimindo membro de classe alterada
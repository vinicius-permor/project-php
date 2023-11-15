<div class="titulo"> Classe Abstrata </div>

<?php

abstract class SuperClasse
{
    public abstract function novafuncao();
    abstract protected function outranova_funcao($parametro);
}

abstract class ClasseSecundaria extends SuperClasse {
    public function novafuncao()
    {
        echo "usando metodo da função publica nova função<br>";
    }

    abstract public function funcaoDaClasse_secundaria();
}
class Concreta extends ClasseSecundaria {
    public function novafuncao() {
        echo "executando o metodo da novafuncao <br>";
        parent::novafuncao();
    }
    protected function outranova_funcao($parametro) {
        echo "execurtando outranova_funcao na classe concreta, $parametro<br>";
    }
    public function funcaoDaClasse_secundaria() {
        echo "executando metodo da funcao da classe secundaria , na exrtensão com a classe concreta<br>";
        $this->outranova_funcao('um novo parametro');
    }
}


$item = new Concreta();
$item->novafuncao();
$item->funcaoDaClasse_secundaria();









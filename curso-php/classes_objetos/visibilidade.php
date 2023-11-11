//modificadores de acesso

<div class="titulo"> Visibilidade </div>

<?php
class A {
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        echo "mostrando publico: {$this->publico}<br>";
        echo "mostrando protegido: {$this->protegido}<br>";
        echo "mostrando privado: {$this->privado}<br>";
    }

    private function naoMostrar() {
        echo "Não vou imprimir<br>";
    }
    protected function impressaoPorHeranaca() {
        echo "impresso pela funnção herança, acessando conteudo protegido<br>";
    }
}


class B extends A
{
    public function mostrarB() {
        echo "estou na classe B estou acessando o metodo {$this->publico} do conteudo A<br>";
        echo "estou na classe B estou acesssando o metodo {$this->protegido} do conteudo A<br>";
       parent::impressaoPorHeranaca();
    }


}


$a = new A();
$a->mostrarA();

print "<br>";

$b = new B();
$b->mostrarB();

echo "fim<br>";
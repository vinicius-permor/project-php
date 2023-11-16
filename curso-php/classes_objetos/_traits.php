<div class="titulo"> Traits </div>

<?php
trait validacao
{
    public $a = 'valor A';
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validandotrait
{
    public $b = 'valor B<br>';
    private $c = 'valor privado<br>';
    public  function validarString($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validandotrait {
        validandotrait::validarString insteadof validacao;
        validacao::validarString as validacaoSimples;
    }
    public function imprimirValorC() {
        echo '<br>',$this->c;
    }
}
$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo "<br>";
var_dump($usuario->validacaoSimples(' '));
echo '<br>';
var_dump($usuario->validarString(' '));
echo '<br>';
echo $usuario->a, '<br>', $usuario->b;
$usuario->imprimirValorC();
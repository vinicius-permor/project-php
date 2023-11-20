<?php namespace contexto; ?>
<div class="titulo"> Basico  Namespace </div>

<?php
echo __NAMESPACE__ . '<br>';
const constante1 = 123;
define('contexto\constante2', 456);
define(__NAMESPACE__ . '\constante3', 678);
define('outro_contexto\constante4', 91011);

echo constante1 . '<br>';
echo constante2 . '<br>';
echo \contexto\constante3 . '<br>'; // com duas barras acessa de forma absoluta
echo  constant(__NAMESPACE__ . '\constante3') . '<br>';
echo \outro_contexto\constante4 . '<br>';

function soma($a, $b) {
    return $a + $b;
}

echo \contexto\soma(1,2) . '<br>';
echo soma(3,4) . '<br>';

function strpos($str , $text) {
    echo "Buscando o texto '{$text} em {$str}'<br>";
    return 1;
}
echo strpos('Texto generico para busca', 'busca') . '<br>';
echo \strpos('Texto generico para busca', 'busca') . '<br>';
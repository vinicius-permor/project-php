<div class="titulo"> Função Anonima </div>

<?php
$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(1,2) . '<br>';

function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op = $resultado<br>";
}

executar(2,3 ,'+', $soma);
<div class="titulo"> Função Anonima </div>

<?php
$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(1,2) . '<br>';

function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

executar(2,3 ,'+', $soma);


$multiplicacao = function ($a, $b) {
    return $a * $b;
};

executar(2,3,'*', $multiplicacao);

$divisao = function ($a, $b) {
    return $a / $b;
};
executar(9,3,'/', $divisao);

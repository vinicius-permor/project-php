<div class="titulo"> argumentos variáveis</div>

<?php
function soma($a, $b, $c) {
    return $a + $b + $c;
}
echo soma(89,53, 100) . '<br>';

function somaCompleta(...$numeros){
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1,2,3,4,5);

$array = [6,7,8];
echo '<br>' . somaCompleta(...$array);


function menbers($titular, ...$dependentes) {
    echo "titular: $titular <br>";
    if ($dependentes){
        foreach ($dependentes as $dep) {
            echo "Dependentes: $dep <br>";
        }
    }
}

echo '<br>';
menbers("Marcelo", "Paulo");

echo '<br>';
menbers("Marcus", "Vinicius");
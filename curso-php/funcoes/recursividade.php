<div class="titulo"> Recursividade </div>

<?php

function somaAteUm($numero) {
    $soma = 0;
    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaAteUm(150) . '<br>';

function somaRecursiva($numero) {
    if ($numero === 1) {
        return 1;
    } else {
        $numero + somaRecursiva($numero - 1);
    }
}


echo somaRecursiva(150) . '<br>';

function somaRecursivaEconomica($numero) {
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(150) . '<br>';
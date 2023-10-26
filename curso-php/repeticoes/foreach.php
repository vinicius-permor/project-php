<div class="titulo"> Foreach</div>


<?php
$array = [ 1 => 'segunda', 'terça', 'quarta', 'quinta', 'sexta'];

foreach ($array as $valor) {
    print "$valor <br>";
}

foreach ($array as $indice => $valor) {
    print "$indice => $valor <br>";
}

$matrix = [
    ['a','e','i','o','u'],
    ['b','c','d']
];

foreach ($matrix as $linha) {
    foreach ($linha as $letra) {
        echo "$letra";
    }
    echo "<br>";
}

$numeros = [1,2,3,4,5];
foreach ($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);
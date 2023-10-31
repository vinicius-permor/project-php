<div class="titulo"> Declaração de Tipos </div>

<?php
function soma1($a, $b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo soma1(1,2) . '<br>';
echo soma1(1.9,2.8) . '<br>';
echo soma1(1,'4dois') . '<br>';

function soma2(int $a, int $b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo soma2(1,2) . '<br>';
echo soma2(1.7,2.5) . '<br>';
//echo soma2(1,'4dois') . '<br>';

function soma3($a, float $b): int {
    echo "<span>Soamndo $a + $b = <span>";
    return $a + $b;
}
echo soma3(1,2) . '<br>';
echo soma3(1.7,2.5) . '<br>';
echo soma3(1, '4dois') . '<br>';
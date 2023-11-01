<div class="titulo"> Closure/Callable</div>

<?php
$soma1 = function ($a, $b) {
    return $a + $b;
};

function soma2($a, $b) {
    return $a * $b;
};

echo $soma1(2,3) . ' ';
echo (is_callable($soma1) ? 'sim': 'não') . '<br>';

//echo soma2(3,2) . ' ';
//echo (is_callable(soma2) ? 'sim':'não') . '<br>';
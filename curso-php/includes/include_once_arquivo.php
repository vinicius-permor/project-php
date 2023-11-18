<?php
echo "carregando: include_once_arquivo<br>";

$variavel = 'definindo variavel';


if (!function_exists('soma')) {
    function soma($a, $b) {
        return $a + $b;
    }
}


<div class="titulo"> retornando função </div>

<?php

function soma($parametro1) {
    return function($parametro2) use ($parametro1) {
        return $parametro1 + $parametro2;
    };
}

echo soma(3)(3);
$maisDois = soma(2);
echo '<br>' , $maisDois(10);
echo '<br>' , $maisDois(18);

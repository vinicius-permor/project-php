<div class="titulo">Atribuições</div>

<?php

$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 3;
echo '<br>' . $numero;
$numero = $numero + 7.5;
echo '<br>' . $numero;
$numero--;
echo '<br>' . $numero;
$numero++;
echo '<br>' . $numero;

$numero *=10;
echo '<br>' . $numero;
$numero /=2;
echo '<br' . $numero;
$numero %= 5;
echo '<br>' . $numero;
$numero **= 4;
echo '<br>' . $numero;

$texto = 'isso aqui é um texto';

echo '<br>' . $texto . ' mais uma coisa ';
$texto.= ' e ainda mais uma coisa';
echo '<br>' . $texto;

// $variavelInexistente = 'valor inexistente';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'defalut';
echo '<br>' . $valor;
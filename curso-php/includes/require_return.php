<div class="titulo"> Require & Return</div>

<?php
$valorRetorno = require "return_usado.php";
$valorRetorno2 = include __DIR__ . "return_usado.php";

print "$valorRetorno<br>";
print "$valorRetorno2<br>";
print "$variavelRetornada<br>";

echo __DIR__ . '<br>';

$segundoValor = require __DIR__ . '/return_nao_usado.php';
$segundoValor2 = include __DIR__ . '/return_nao_usado.php';

print "$segundoValor<br>";
print "$segundoValor2<br>";
print "$variavelDeclarada<br>";
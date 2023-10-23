<div class="titulo">switch</div>

<?php
$categoria = 'luxo';
$preco = 0.0;
$carro = '';
if ($categoria === 'luxo') {
  # code...
  $carro = 'mercedes';
  $preco = '250000';
} elseif ($categoria === 'SUV') {
  # code...
  $carro = 'renegade';
  $preco = 80000;
} elseif ($categoria === 'sedan') {
  # code...
  $carro = 'Etios';
  $preco = 55000;
} else {
  $carro = 'Mobi';
  $preco = 33000;
}

$precoFormado = number_format($preco, 2, ',', '.');
echo "<p> Carro: $carro<br>Preço: R$ $precoFormado</p>";

$categoria = 'SUV';
switch (strtolower($categoria)) {
  case 'luxo':
    $carro = 'Marcedes';
    $preco = 250000;
    break;
  case 'SUV':
  case 'SUV basico':
    $carro = 'renegade';
    $preco = 80000;
    break;
  case 'sedan':
    $carro = 'Etios';
    $preco = 55000;
    break;
  default:
    $carro = 'mobi';
    $preco = '33000';
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: $precoFormatado</p>";

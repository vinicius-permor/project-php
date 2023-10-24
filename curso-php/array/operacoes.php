<div class="titulo">Operações</div>

<?php
$dados1 = [
  "nome" => "Marcus Vinicius",
  "idade" => 29
];
$dados2 = [
  "naturalidade" => "marilia"
];

$dados2["endereço"] = "rua A";

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);


echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo "${dadosCompletos['idade']}";


//para remover um indice do array
unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);

$impares = [1,3,7,9];
$pares = [0,2,4,8, 10];

$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);
sort($decimais);
print_r($decimais);


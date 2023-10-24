<div class="titulo">Array Multimencionais</div>

<?php
$dados = [
  "pessoa1" => [
    "nome" => "Roberto",
    "idade" => 26,
    "naturalidade" => "São Paulo"
  ],
  [
    "nome" => "Maria",
    "idade" => 25,
    "naturalidade" => "Bahia"
  ],
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] =[
  "nome" => "ANA",
  "idade" => 38,
  "naturalidade" => "EUA, California"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2]["vizinho"] = "chaves";
echo '<br>';
print_r($dados[2]);
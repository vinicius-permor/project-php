<div class="titulo">Operador Ternario</div>

<?php

$idade = 70;
$status;
if ($idade > 18) {
  $status = 'Maior de idade';
  # code...
} else {
  $status = 'Menor de iadade';
}

print "$status<br>";
$idade = 17;
$status = $idade >= 18 ? 'Maior de iadade' : 'Menor de idade';
echo "$status<br>";

$tipoMaiorDeIdade = ($idade >= 65 ? 'Aaposentado' : 'maior de idade');
$status = $idade >= 18 ? $tipoMaiorDeIdade : 'Menor de idade';
$status = $idade >= 18 ? $idade >= 65 ?  'aposentado' : 'maior de idade' : 'menor de idade';

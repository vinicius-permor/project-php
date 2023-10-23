<div class="titulo">Operadores Logicos</div>


<?php
print "<p class='divisão'>V ou F<br>";
var_dump(true);
print '<br>';
var_dump(!!true);

echo "<p class='divisão'>Tabela verdade 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);


echo "<p class='divisão'>Tabela verdade 'OU' (OU)</p><hr>";
var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);



print "<p class='divisão'>Exemplos</p><hr>";
$idade = 67;
$sexo = 'M';
$pagou_previdencia = true;

$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCreiterio = $criterioHomem || $criterioMulher;
$pode_se_aposentar = $pagou_previdencia && $atingiuCreiterio;
echo "Pode se aposentar -> $podeSeAposentar .<br>";

if ($idade >= 60 && $sexo === 'F') {
  print "pode se aposentar -> $sexo";
  # code...
} elseif ($idade >= 65 && $sexo === 'M') {
  print "pode se aposentar -> $sexo";
  # code...
} else {
  print 'vai ter que trabalhar mais';
}

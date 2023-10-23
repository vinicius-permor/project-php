<div class="titulo">Operadores Relacionais</div>

<?php
// var_dump(1 == 2);
// var_dump(3 > 4);
// var_dump(5 >= 6);
// var_dump(7 <= 8);
// var_dump(9 <> 10); // dirente do sql
// var_dump(11 != 12);

var_dump(111 == '111');
var_dump(111 === '111'); // igualdade estrita , qual tipo que está sendo comparado -  string, bool, number, 
var_dump(111 != '111');
var_dump(111 !== '111');

echo "<p class='divisão'>Relacionais no if/Else</p><hr>";
$idade = 29;
if ($idade < 18) {
  # code...
  print "Menor de idade<br>";
} else if ($idade <= 65) {
  # code...
  print "adulto: $idade anos<br>";
} else {
  # code...
  print "tem: $idade<br>";
}

echo "<p class='divisão'>Space Ship</p><hr>";
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

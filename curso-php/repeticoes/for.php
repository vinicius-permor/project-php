<div class="titulo">Laço For</div>

<?php

for ($cont=1; $cont <=5 ; $cont++) { 
  print "$cont <br>";
};

echo "<hr>";

for (;$cont <= 10; $cont++) { 
  print "$cont <br>";
};

echo "<hr>";

for(; $cont <= 15;) {
  print "$cont <br>";
  $cont++;
};

$array = ['segunda', 'terça', 'quarta', 'quinta', 'sexta'];

echo "<hr>";
print_r($array);
echo '<br>';

echo "<hr>";
for($i = 0; $i < count($array); $i++) {
  echo "{$array[$i]} <br>";
};


$matrix = [
  ['a','e','i','o','u'],
  ['b','c','d']
];

for($i = 0; $i <  count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j++) {
      print "{$matrix[$i][$j]} ";
    }
    echo "<br>";
}
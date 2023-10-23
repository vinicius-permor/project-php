<div class="titulo">Desafio PI</div>

<?php
print pi();
$pi = 3.14;

if ($pi == pi()) {
  # code...
  echo "<br>Iguais!";
} else {

  echo "<br>Diferentes!";
}
// operador relacional
$piErrado = 2.8;

//resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

if ($pi - pi() <= 0.01) {
  # code...
  echo '<br>Praticamente iguais';
} else {
  echo '<br>Praticamente iguais';
}
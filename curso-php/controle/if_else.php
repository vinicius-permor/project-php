<div class="titulo">IF ELSE</div>

<?php
if (true) {
  echo "serei impresso<br>";
}



if (false) {
  echo "verdadeiro 1<br>";
  echo "verdadeiro 2<br>";
} else {
  echo "falso parte B<br>";
  echo "falso - Parte A<br>";
}


if (false) {
  echo " Passo A<br>";
} else if (false) {
  echo "Passo B<br>";
}
else if(true) {
  echo "Passo C<br>";
} else {
  echo "ultimo passo<br>";
}

echo "fim<br>";


?>
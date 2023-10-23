<div class="titulo">Variaveis</div>


<?php
$a = 'newValue';
$$a = 'newValue2';
echo "$a {$$a} ${$a} $newValue";

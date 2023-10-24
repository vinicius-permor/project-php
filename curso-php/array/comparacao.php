<div class="titulo">Comparação Arrays</div>

<?php
$list1 = ['nome' => 'Mara', 'idade' => 30];
$list2 = ['nome' => 'Mara', 'idade' => 30];
var_dump($list1 == $list2);
var_dump($list1 === $list2);

$list3 = ['idade' => 30, 'nome' => 'Mara'];
echo '<br>';
var_dump($list1 == $list3);
var_dump($list1 === $list3);
var_dump($list1 != $list3);
var_dump($list1 !== $list3);

echo '<br>';
$list4 = ['idade' => '30', 'nome' => 'Mara'];
var_dump($list1 == $list4);
var_dump($list1 === $list4);
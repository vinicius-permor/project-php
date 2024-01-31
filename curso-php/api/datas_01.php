<div class="titulo"> Data #1 </div>

<?php
echo time() . '<br>';
echo date('D,d \d\e M \d\e Y H:i A') . '<br>';


echo  strftime('%A, %d de %B de %Y', time()) . '<br>';
setlocale(LC_TIME, 'pt_BR', 'pt_BR.UTF-8');
echo  strftime('%A, %d de %B de %Y', time()) . '<br>';


$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B', $amanha) . '<br>';

$proximaSemana = strtotime('+1week');
$proximoAno = strtotime('+year');
echo strftime('%a, %d %B de %Y', $proximaSemana) . '<br>';
echo strftime('%a, %d %B de %Y', $proximoAno) . '<br>';

$dataFixa = mktime(15,30,50,1,25,1975);
echo strftime('%A, %d, %B de %Y - %H:%M:%S', $dataFixa);

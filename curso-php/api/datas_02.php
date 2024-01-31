<div class="titulo"> Data #2 </div>

<?php
$formatoData1 = 'D, d\d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';


$agora = new DateTime();


//print_r($agora);
//echo '<br>';



echo $agora->format($formatoData1) . '<br>';
setlocale(LC_TIME, 'pt_BR');
echo strftime($formatoData2, $agora->getTimestamp()) . '<br>';

$amanha = new Datetime('+2 week');
echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>';

$amanha->modify('+1 day');
echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>';

$amanha->setDate(2000, 5 , 20);
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';


$dataPassada = new DateTime('2000-5-17');
$dataFutura = new DateTime('2023-9-12');
$outraData = new DateTime('230-12-8');
echo ($amanha > $dataPassada ? 'Maior':'Menor') . '<br>';
echo ($amanha > $dataFutura ? 'Maior': 'Menor') . '<br>';
echo  $outraData === $dataFutura ? 'igual' : 'diferente' . '<br>';

print '<br>';

$tz = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime(null, $tz);
echo $agora->format('d/M/Y H:i:s');
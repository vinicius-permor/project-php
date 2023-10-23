<div class="titulo">Constantes</div>

<?php
define('Taxa_de_juros', 5.9);
echo Taxa_de_juros;
echo '<br>' . $Taxa_de_juros . '!';

const NOVA_TAXA =  2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
define('NOVISSIMA TAIXA' , $valorVariavel);
const NOVISSIMA_TAXA = 2.8 + 1.2;
print '<br>' . NOVISSIMA_TAXA;
print '<br>' . PHP_VERSION;
echo '<br>' . __FILE__;
echo '<br>' . __DIR__;
echo '<br> linhas: '  .  __LINE__;
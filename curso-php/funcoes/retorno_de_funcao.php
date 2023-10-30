<div class="titulo">  argumentos e retorno  </div>

<?php
function reciveMessage(): string {
    return 'retornando mensagem';
}


$MENSAGEM = reciveMessage();
echo $MENSAGEM, '<br>';
echo $MENSAGEM, '<br>';
var_dump($MENSAGEM);

function reviceMessageName($nome): string {
    return "bem vindo , {$nome}!";
}

echo '<br>', reviceMessageName('Marcus');
echo '<br>', reviceMessageName('Vinicius');

function SUM($a, $b) {
    return $a + $b;
}
echo '<br>', SUM(4, 9);
echo '<br>', SUM(5,10);


$VALUE = 1;
function newTurnValue($a, $newValue): void {
    $a = $newValue;
}
newTurnValue($VALUE, 3);
echo '<br>', $VALUE;

function trueTurnValue(&$a, $turnValue) {
    $a = $turnValue;
}
trueTurnValue($newValue, 5000);
echo '<br>', $newValue;
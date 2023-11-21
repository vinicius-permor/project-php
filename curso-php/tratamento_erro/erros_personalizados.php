<div class="titulo"> Erros personalizados </div>

<?php

class FaixaEtariaException extends Exception {
    public function __construct($message, $code = 0, $previous = null) {
        echo "Erro personalizado: $message<br>";
        parent::__construct($message, $code, $previous);
    }
}

function calcularTempoAposentadoria($idade) {
    if ($idade < 18) {
        throw new FaixaEtariaException('ainda está longe');
    }
    if ($idade > 70) {
        throw new FaixaEtariaException('ja deveria estar aposentado');
    }
    return 70 - $idade;
}

$listandoIdades = [15, 30, 60, 80];

foreach ($listandoIdades as $idade) {
    try {
        $tempoRestate = calcularTempoAposentadoria($idade);
        echo "Idade $idade. $tempoRestate anos restantes<br>";
    } catch (FaixaEtariaException $e) {
        echo "não foi possivel calcular para $idade anos. <br>";
        echo "Motivo; {$e->getMessage()}<br>";

    }
}

echo "<br>FIM!";
<div class="titulo"> Palindromo </div>


<?php
function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for ($i = 0; $i <= $ultimoIndice; $i++) {
        if ($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'NÃO';
        }
        return 'SIM';
    }
}

echo palindromo('arara'). ' ';
echo palindromo('hannah'). ' ';
echo palindromo('abacati'). ' ';
echo palindromo('rato'). ' ';
echo '<br>';

function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'SIM': 'NÃO';
}
echo palindromo('arara'). ' ';
echo palindromo('hannah'). ' ';
echo palindromo('abacati'). ' ';
echo palindromo('rato'). ' ';

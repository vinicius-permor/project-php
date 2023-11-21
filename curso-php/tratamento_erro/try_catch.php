<div class="titulo"> Try / Catch </div>

<?php

try {
    echo intdiv(7,0);
} catch (Error $e) {
    echo 'ERRO<br>';
}

try {
    throw new Exception('Um novo erro');
    echo intdiv(7,0);
} catch (DivisionByZeroError $e) {
    echo 'Erro de divisão por 0<br>';
} catch (Throwable $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
    echo 'Erro final<br>';
}

echo 'execução continua aqui <br>';
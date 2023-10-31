<div class="titulo"> Argumento Padrão </div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'cliente(a)') {
    echo "bem vindo, $nome $sobrenome! <br>";
}

saudacao();
saudacao(NULL);
saudacao(null, NULL);
saudacao('Marcus', 'Vinicius');


function anotarPerdid($comida, $bebida) {
    echo "Pedido comida: $comida <br>";
    echo "Pedido bebida: $bebida <br>";
}

anotarPerdid('double bugger', 'água tônica');
anotarPerdid('steak bugger', 'refrigerate');
<div class="titulo"> Argumento Padrão </div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'cliente(a)') {
    echo "bem vindo, $nome $sobrenome! <br>";
}

saudacao();
saudacao(NULL);
saudacao(null, NULL);
saudacao('Marcus', 'Vinicius');


function anotarPerdido($comida, $bebida) {
    echo "Pedido comida: $comida <br>";
    echo "Pedido bebida: $bebida <br>";
}

anotarPerdido('double bugger', 'água tônica');
anotarPerdido('steak bugger', 'refrigerate');

function coletarPedido($tipo_amburguer, $tipo_bebida, $ponto_da_carne) {
    print "O tipo do amburguer $tipo_amburguer <br>";
    print "O tipo de bebida $tipo_bebida <br>";
    print "O ponto da carne $ponto_da_carne <br>";
}

coletarPedido('triple taste', 'coca-cola, zero açucar', 'bem passado');
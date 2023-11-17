<div class="titulo"> Include na Função </div>

<?php
print "carregando: <strong>include_funcao.php</strong><br>";

function carregarArquivo() {
    include "_include_arquivo.php";

    echo $variavel . "<br>";
    echo soma(2,5) . "<br>";
}

echo "Novamente no arquivo include_funcao.php<br>";
//echo soma(1,8) . "<br>";
carregarArquivo();

echo "variavel = {$variavel}.";

echo '<br>' . soma(3,8);
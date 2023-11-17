<div class="titulo"> Include </div>

<?php
echo "estou executando o arquivo _include.php<br>";
include "_include_arquivo.php";
//include "_include_arquivo.php";

echo soma(3, 8) . "<br>";

echo "chamando a variavel do arquivo _include_arquivo.php: {$variavel}.<br>";
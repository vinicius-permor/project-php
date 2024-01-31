<div class="titulo"> lendo arquivo </div>

<?php
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10 );
echo '<br>';
echo fread($arquivo, 10);
echo "<br>";

$novoArquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo $tamanho . "<br>";
echo fread($novoArquivo, $tamanho);
fclose($arquivo);
<div class="titulo"> escrevendo arquivo </div>

<?php

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor Inicial\n");

$str1 = "Segunda linha\n";
fwrite($arquivo, $str1);

$str2 = "Terceira Linha\n";
fwrite($arquivo, $str2);

$textoLorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 Sed euismod, velit vel bibendum bibendum, ipsum velit bibendum ipsum,
  vel bibendum ipsum velit vel bibendum. Sed euismod,
   velit vel bibendum bibendum, ipsum velit bibendum ipsum,
    vel bibendum ipsum velit vel bibendum. Sed euismod, 
    velit vel bibendum bibendum, ipsum velit bibendum ipsum,
     vel bibendum ipsum velit vel bibendum. Sed euismod, 
     velit vel bibendum bibendum, ipsum velit bibendum ipsum, 
     vel bibendum ipsum velit vel bibendum. Sed euismod, 
     velit vel bibendum bibendum, ipsum velit bibendum ipsum, 
     vel bibendum ipsum velit vel bibendum.";
fwrite($arquivo, $$textoLorem);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Um novo conteudo");
fclose($arquivo);

$arquivo = fopen("teste.txt", "a");
fwrite($arquivo, "com novos valore \n");
fwrite($arquivo,  ",adiconando um novo conteudo\n");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x');


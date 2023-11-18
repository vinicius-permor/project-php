<div class="titulo"> Include /  Require </div>

<?php
ini_set('display_errors',1);
echo "usando include com arquive inexistente<br>";
include "arquivo_inexistente.php"; // permite a renderização


echo  "usando include com arquive inexistente<br>";
require "arquivo_inexistente.php"; // gera um erro fatal

print "aqui é o final<br>";
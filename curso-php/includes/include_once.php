<div class="titulo"> include once / require once</div>

<?php
ini_set('display_errors',1);
include "include_once_arquivo.php";
//require "include_once_arquivo.php";

echo "variavel = '{$variavel}'. <br>";
$variavel = 'variavel alterada';
echo "variavel = {$variavel}. <br>";

include "include_once_arquivo.php";
echo "Variavel = '{$variavel}' .<br>";

$variavel = "uma nova alteração";
echo "varivael = '{$variavel}'.<br>";


include_once 'include_once_arquivo.php';
echo "variavel = '{$variavel}'.<br>";
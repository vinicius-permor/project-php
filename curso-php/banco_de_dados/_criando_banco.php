<div class="titulo"> <strong> Banco de Dados </strong> </div>

<?php
require_once 'connection.php';
$conect = newDataBse(null);
$sql = 'CREATE DATABASE IF NOT EXISTS _banco_php';
$result = $conect->query($sql);
if ($result) {
    echo " success ";
} else {
    echo " Error try again " . $conect->error;
}
$conect->close();
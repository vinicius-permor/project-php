<div class="titulo"> <strong> criando tabela </strong> </div>

<?php
require_once "connection.php";
$sqlTable = "CREATE TABLE IF NOT EXISTS cadastro (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    birth DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    children INT,
    salary FLOAT
)";
$connectionTable = newDataBse();
$resultTable = $connectionTable->query($sqlTable);
if ($resultTable) {
    echo " success ";
} else {
    echo " connection lost " . $connectionTable->error;
}
$connectionTable->close();
<div class="titulo"> inserindo registro</div>
<?php
require_once "connection.php";
$sqlInsertionTable = "INSERT INTO cadastro
    (name, birth, email, site, children, salary)
 VALUES ('Alice Perry',
         '1990-08-29',
         'alice.perry@gmail.com',
         'http://myecommerce.com',
          1,
          5000 )";
$newConnectionTable = newDataBse();
$resultInsertionTable = $newConnectionTable -> query($sqlInsertionTable);
if ($resultInsertionTable) {
    echo " success ";
} else {
    echo " error " . $newConnectionTable->error;
}

$newConnectionTable -> close();
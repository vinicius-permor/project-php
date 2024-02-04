<?php
function newDataBse($data = 'banco_php') {
    $server = '127.0.1:3307';
    $user = 'root';
    $password = 'root';
    $connection = new mysqli($server, $user, $password, $data);
    if ($connection -> connect_error){
        echo " not conected " . $connection->connect_error;
    }
    return $connection;
}

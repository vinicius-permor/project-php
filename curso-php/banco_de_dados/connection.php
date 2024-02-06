<?php
function newDataBse($data = '_banco_php') {
    $server = '127.0.0.1:3307';
    $user = 'root';
    $password = 'root';
    $connection = new mysqli($server, $user, $password, $data);
    if ($connection -> connect_error){
        die(" Error " . $connection -> connect_error);
    }
    return $connection;
}

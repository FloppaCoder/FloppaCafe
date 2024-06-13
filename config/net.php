<?php

$dsn = "mysql:host=localhost;dbname=floppacafe";
$username = "root";
$password = "";

try {
    $connection = new PDO($dsn, $username, $password);
    // echo "Conexión exitosa a la base de datos!";
} catch (Exception $e) {
    echo $e->getMessage();
}


?>
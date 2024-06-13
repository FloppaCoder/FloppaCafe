<?php

$dsn = "mysql:host=localhost; dbname=floppacafe";
$user = "root";
$password = "";

try {
    $conn = new PDO($dsn, $user, $password);
    // echo "Conexion a la Base de Datos Exitosa!";
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>
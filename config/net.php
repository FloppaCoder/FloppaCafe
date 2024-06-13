<?php

$dsn = "mysql:host=localhost;bdname=floppacafe";
$user="root";
$password="";

try{
    $connection = new PDO($dsn, $user, $password);
    // echo "Conexion a Base de Datos Exitosa!";
} catch (Exception $e) {
    // echo "Error al conectar la Base de Datos: " . $e;
}

?>
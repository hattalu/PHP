<?php

$servidor = "localhost";
$baseDeDatos = "ejemplo";
$usuario = "root";
$pass = "";

try{
    $conexion = new PDO("mysql:host = $servidor; dbname = $baseDeDatos", $usuario, $pass);
}catch(Exception $ex){
    echo $ex->getMessage();
}

?>
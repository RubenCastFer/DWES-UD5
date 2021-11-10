<?php
$servidor="localhost";
$baseDatos="1"; 
$user= "developer";
$pass="developer";

function insertaElemento($usuario,$contraseña,$cuentaBancaria){
    $contraseñaEncriptada=password_hash($contraseña,PASSWORD_DEFAULT);

    try {
        $conexion = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS['user'], $GLOBALS['pass']);
        $consulta =$conexion->prepare("INSERT INTO usuarios (usuario, contrasenya, cuentabancaria) VALUES (:usuario, :contrasenya, :cuentabancaria)");         
        $parametros = array(":usuario"=>$usuario, ":contrasenya"=>$contraseñaEncriptada, ":cuentabancaria"=>$cuentaBancaria);
        $consulta->execute($parametros);
        $resultado=$conexion->lastInsertId();
        $conexion = null;
        return $resultado;

    } catch (PDOException $e) {
        return "roto";
    }
}
?>
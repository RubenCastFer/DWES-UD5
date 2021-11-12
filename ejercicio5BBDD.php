<?php
$servidor="localhost";
$baseDatos="agenciaviajes"; 
$user= "developer";
$pass="developer";

function insertaElemento($usuario,$contrasenya,$cuentaBancaria){

    try {
        $conexion = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS['user'], $GLOBALS['pass']);
        $consulta =$conexion->prepare("INSERT INTO usuarios (usuario, contrasenya, cuentabancaria) VALUES (:usuario, :contrasenyaEncriptada, :cuentabancaria)");         
        $contrasenyaEncriptada=password_hash($contrasenya,PASSWORD_DEFAULT);

        $parametros = array(":usuario"=>$usuario, ":contrasenyaEncriptada"=>$contrasenyaEncriptada, ":cuentabancaria"=>$cuentaBancaria);
        $consulta->execute($parametros);
        $resultado=$conexion->lastInsertId();
        $conexion = null;
        return $resultado;

    } catch (PDOException $e) {
        return "roto";
    }
}
?>
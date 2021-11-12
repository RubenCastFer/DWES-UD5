<?php
    session_start();

    if (empty($_SESSION["perfil"])) {
        header("Location: ejercicio7.php");    
    }else if ($_SESSION["perfil"]=="admin") {
        echo"Eres el jefe supremo, ¿no quieres ir a tu pagina?";    
    }else{
        echo "hola pringao";
    }
?>
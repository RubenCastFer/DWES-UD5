<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea usuario</title>
</head>

<?php
    include "ejercicio7BBDD.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $usuario = strip_tags($usuario);
        $usuario = stripslashes($usuario);
        $usuario = htmlspecialchars($usuario);

        $contrasenya = $_POST["contrasenya"];
        $contrasenya = strip_tags($contrasenya);
        $contrasenya = stripslashes($contrasenya);
        $contrasenya = htmlspecialchars($contrasenya);
        
        $usuarioCompleto=getUser($usuario);
        if ($usuarioCompleto==false) {
            echo "usuario incorrecto";
        } else{
            if(password_verify($contrasenya,$usuarioCompleto["contrasenya"])){
                echo "Usuario y contraseña correctas";
                session_destroy();
                session_start();
                $_SESSION["perfil"]=$usuarioCompleto["perfil"];
                setcookie("session", $_SESSION, time()+3600*3,"","");
                
                if ($usuarioCompleto["perfil"]=="admin"){
                    echo "eres el jefe supremo";
                    header("Location: admin.php");
                }else if($usuarioCompleto["perfil"]=="usuario"){
                    echo "hola pringao";
                    header("Location: usuario.php");    
                }
            }else{
                echo "Usuario y contraseña incorrectas";
            }    
        }
        
        
    }

?>
<body>
    <form class="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="POST">
        <h2 class="form-titulo">Características:</h2>
        <div class="contenedor-inputs">
            <input type="text" name="usuario" placeholder="Usuario" class="input-100" required>
            <input type="password" name="contrasenya" placeholder="Contraseña" class="input-100" required>
            <input type="submit" value="Registrar" class="btn-enviar" >
            <div id="errores"></div>
        </div>
    </form>
</body>

</html>
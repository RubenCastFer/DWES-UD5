<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea usuario</title>
</head>

<?php
    include "ejercicio5.inc.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contrasenya = $_POST["contrasenya"];
        $cuenta = $_POST["cuentaBancaria"];
        echo insertaElemento($usuario,$contrasenya,$cuenta); 
        
    }

?>
<body>
    <form class="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="POST">
        <h2 class="form-titulo">Características:</h2>
        <div class="contenedor-inputs">
            <input type="text" name="usuario" placeholder="Usuario" class="input-100" required>
            <input type="password" name="contrasenya" placeholder="Contraseña" class="input-100" required>
            <input type="text" name="cuentaBancaria" placeholder="CuentaBancaria" class="input-100" required>
            <input type="submit" value="Registrar" class="btn-enviar" >
            <div id="errores"></div>
        </div>
    </form>
</body>

</html>
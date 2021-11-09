<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <tr>
            <th>Nombre</th>
            <th>Funcion</th>
            <th>Valores</th>
        </tr>
        <tr>
            <td>session.use_cookies</td>
            <td>especifica si el módulo usará cookies para almacenar el id de sesión en la parte del cliente. </td>
            <td>1(habilitado), 0(deshabilitado)</td>
        </tr>
        <tr>
            <td>Session.use_only_cookies</td>
            <td>Especifica si el módulo sólo usará cookies para almacenar el id de sesión en la parte del cliente. Habilitar este ajuste previene ataques que implican pasar el id de sesión en la URL.</td>
            <td>1(habilitado), 0(deshabilitado)</td>
        </tr>
        <tr>
            <td>Session.save_handler</td>
            <td>Define el nombre del gestor que se usa para almacenar y recuperar información asociada con una sesión.  </td>
            <td>Files,Sqlite,Redis,Memcached</td>
        </tr>
        <tr>
            <td>Session.name</td>
            <td>Especifica el nombre de la sesión que se usa como nombre de cookie. Sólo debería contener caracteres alfanuméricos.</td>
            <td>Por defecto PHPSESSID, pero podria ser cualquier otro nombre</td>
        </tr>
        <tr>
            <td>Session.auto_start</td>
            <td>Especifica si el módulo de sesión inicia una sesión automáticamente cuando arranque una petición.</td>
            <td>1(habilitado), 0(deshabilitado)</td>
        </tr>
        <tr>
            <td>Session.cookie_lifetime</td>
            <td>Especifica el tiempo de vida en segundos de la cookie que es enviada al navegador.</td>
            <td>El valor 0 significa "hasta que el navegador se cierre". Por defecto es 0. Cualquier cantidad de tiempo en segundos</td>
        </tr>
        <tr>
            <td>Session.gc_maxlifetime</td>
            <td>Sspecifica el número de segundos después de lo cual la información sea vista como 'basura' y potencialmente limpiada. La recolección de basura puede suceder durante el inicio de sesiones</td>
            <td>Cualquier cantidad de tiempo en segundos</td>
        </tr>

    </table>
</body>
</html>
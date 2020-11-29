<?php
if (isset($_POST["Editar"])){
    $usuario = $_POST["inputUsuario"];
    $clave = $_POST["inputContraseña"];
    
    exec("openssl passwd " . $clave, $claveCifrada);
    
    $descripcion = $_POST["inputDescripcion"];
    $shell = $_POST["inputShell"];
    
    $comando = "sudo usermod " . $usuario;
    if(!empty($clave)){
        $comando = $comando . " -p " . $claveCifrada[0];
    }
    $comando = $comando . " -s " . $shell;
    
    if (!empty($descripcion)) {
        $comando = $comando . " -c " . $descripcion;
    }
    
    exec($comando);
}
if (isset($_POST["Eliminar"])){
    $usuario = $_POST["inputUsuario"];
    $comando = "sudo userdel " . $usuario;
    exec($comando);    
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Parcial III Linux</title>
    <meta http-equiv="refresh" content="0; url=../pages/usuarios.php">
</head>

</html>
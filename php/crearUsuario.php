<?php
$usuario = $_GET["txtUsuario"];
$contrasenia = $_GET["txtContraseña"];
$descripcion = $_GET["txtDescripcion"];
$shell = $_GET["cmbShell"];
$home = $_GET["checkHome"];

$comando = "sudo useradd " . $usuario;
$comando = $comando . " -p " . $contrasenia;
$comando = $comando . " -s " . $shell;

if ($descripcion) {
    $comando = $comando . " -c " . $descripcion;
}
if ($home) {
    $comando = $comando . " -M ";
}

exec($comando);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Parcial III Linux</title>
    <meta http-equiv="refresh" content="0; url=../pages/usuarios.php">
</head>

</html>
<?php
$usuario = $_GET["txtUsuario"];
$clave = $_GET["txtContraseña"];
$descripcion = $_GET["txtDescripcion"];
$shell = $_GET["cmbShell"];
$home = $_GET["checkHome"];

exec("openssl passwd " . $clave, $claveCifrada);

$comando = "sudo useradd " . $usuario;
$comando = $comando . " -p " . $claveCifrada[0];
$comando = $comando . " -s " . $shell;

if (!empty($descripcion)) {
    $comando = $comando . " -c " . $descripcion;
}
if (!isset($home)) {
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
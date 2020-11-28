<?php
$usuario = $_GET["txtUsuario"];
$clave = $_GET["txtContraseña"];
exec("openssl passwd " . $clave, $claveCifrada);

$descripcion = $_GET["txtDescripcion"];
$shell = $_GET["cmbShell"];

$home = $_GET["checkHome"];
$home = trim($home);

$comando = "sudo useradd " . $usuario;
$comando = $comando . " -p " . $claveCifrada[0];
$comando = $comando . " -s " . $shell;

if (!empty($descripcion)) {
    $comando = $comando . " -c " . $descripcion;
}
if (empty($home)) {
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
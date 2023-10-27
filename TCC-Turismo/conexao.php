<?php
$host = "localhost";
$banco = "atitour";
$user = "root";
$senha = "usbw";

$conecta = mysqli_connect($host, $user, $senha, $banco);

if (!$conecta) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_close($conecta);
?>
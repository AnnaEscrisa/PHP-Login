<?php
$Usuario = $_POST["Usuario"];
$Contraseña = $_POST["Contraseña"];


include_once "funciones.php";


$logueadoConExito = login($Usuario, $Contraseña);

if ($logueadoConExito) {
    header("Location: ../Public/cover.php");
    exit;

} else {
    
    echo "Usuario o contraseña incorrectos";
}


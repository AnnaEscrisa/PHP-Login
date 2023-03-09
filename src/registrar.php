<?php

/* Getting the data from the form. */
$Nombre = $_POST["Nombre"];
$Apellidos = $_POST["Apellidos"];
$Edad = $_POST["Edad"];
$Email = $_POST["Email"];
$Usuario = $_POST["Usuario"];
$Contraseña = $_POST["Contraseña"];
$Contraseña_confirmar = $_POST["Contraseña_confirmar"];

# Si no coinciden ambas contraseñas, lo indicamos y salimos
if ($Contraseña !== $Contraseña_confirmar) {
    echo "Las contraseñas no coinciden";
    exit;
}


include_once "funciones.php";



$EmailExistente = EmailEnUso($Email);
if ($EmailExistente) {
    echo "Este email ya esta en uso";
    exit; 
}

$UsuarioExistente = UsuarioEnUso($Usuario);
if ($UsuarioExistente) {
    echo "Este usuario ya esta en uso";
    exit; 
}


#Registro
$RegistroCompleto = registro($Nombre, $Apellidos, $Edad, $Email, $Usuario, $Contraseña);
if ($RegistroCompleto) {
    echo "Registro realizado con exito";
} else {
    echo "Error al registrarte. Intentalo más tarde";
}

?>



<a href="../index.php">Log in</a>
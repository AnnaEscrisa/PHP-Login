<?php

include_once "../DB/Connection.php";

CrearBaseDeDatos();
CrearTabla();

//comprueba si ese email ya esta en uso
function EmailEnUso($Email)
{
    $BD = FetchDB();
    $stmt = $BD->prepare("SELECT Email FROM usuarios WHERE Email = ? LIMIT 1;");
    $stmt->execute([$Email]);
    return $stmt->rowCount() > 0;
}

function UsuarioEnUso($Usuario)
{
    $BD = FetchDB();
    $stmt = $BD->prepare("SELECT Usuario FROM usuarios WHERE Usuario = ? LIMIT 1;");
    $stmt->execute([$Usuario]);
    return $stmt->rowCount() > 0;
}


//Devuelve el usuario y contraseña basandose en el campo "usuario"
function FetchUsuario($Usuario)
{
    $BD = FetchDB();
    $stmt = $BD->prepare("SELECT Usuario, Contraseña FROM usuarios WHERE Usuario = ? LIMIT 1;");
    $stmt->execute([$Usuario]);
    return $stmt->fetchObject();
}

//Devuelve un valor especifico
function FetchDatosPersonales($Dato, $Usuario)
{
    $BD = FetchDB();
    $stmt = $BD->prepare("SELECT $Dato FROM usuarios WHERE Usuario = ? LIMIT 1;");
    $stmt->execute([$Usuario]);
    return $stmt->fetchColumn();
}


function registro($Nombre, $Apellidos, $Edad, $Email, $Usuario, $Contraseña)
{

    $Contraseña = cifrar($Contraseña);
    $BD = FetchDB();
    $stmt = $BD->prepare("INSERT INTO usuarios (Nombre, Apellidos, Edad, Email, Usuario, Contraseña) values(?, ?, ?, ?, ?, ?)");
    return $stmt->execute([$Nombre, $Apellidos, $Edad, $Email, $Usuario, $Contraseña]);
}

//comprobamos que existe el usuario, que la contra es correcta e iniciamos sesion
function login($Usuario, $Contraseña)
{
    $posibleUsuario = FetchUsuario($Usuario);
    if ($posibleUsuario === false) {
        return false;
    }


    $ContraseñaGuardada = $posibleUsuario->Contraseña;
    $coincidencia = coincidenciaContraseñas($Contraseña, $ContraseñaGuardada);

    if (!$coincidencia) {
        return false;
    }


    iniciarSesion($posibleUsuario);

    return true;
}

function iniciarSesion($usuario)
{

    session_start();

    $_SESSION["Usuario"] = $usuario->Usuario;
}


//Si intentamos abrir cover.php sin una sesion iniciada, volveremos al Log in
function checkSession()
{
    session_start();

    if (empty($_SESSION["Usuario"])) {
        header("Location: ../index.php");
    } 
}


function coincidenciaContraseñas($Contraseña, $ContraseñaGuardada)
{
    return password_verify($Contraseña, $ContraseñaGuardada);
}


function cifrar($Contraseña)
{
    return password_hash($Contraseña, PASSWORD_BCRYPT);
}
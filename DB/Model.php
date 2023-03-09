<?php


function CrearBaseDeDatos()
{
    $server = "localhost";
    $usuario = "root";
    $contraseña = "";

    try {
        $DB = new PDO("mysql:host=$server", $usuario, $contraseña);
        $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "CREATE DATABASE IF NOT EXISTS pac1";
        $DB->exec($sql);
        return $DB;

    } catch (Exception $e) {
        echo "Error al crear BD: " . $e->getMessage();
        return null;
    }
}

function CrearTabla()
{
    $server = "localhost";
    $usuario = "root";
    $contraseña = "";
    try {
        $DB = new PDO("mysql:host=$server;dbname=pac1", $usuario, $contraseña);
        $DB->query("set names utf8;");
        $sql = "CREATE TABLE IF NOT EXISTS usuarios (
        id BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Nombre VARCHAR(255) NOT NULL,
        Apellidos VARCHAR(255) NOT NULL,
        Edad INT(3),
        Email VARCHAR(255) NOT NULL UNIQUE,
        Usuario VARCHAR(255) NOT NULL UNIQUE,
        Contraseña VARCHAR(255) NOT NULL
        )";

        $DB->exec($sql);
        return $DB;
    } catch (Exception $e) {
        echo "Error creqando tabla: " . $e->getMessage();
        return null;
    }
}

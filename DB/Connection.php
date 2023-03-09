<?php

include_once "Model.php";


function FetchDB()
{
    $server = "localhost";
    $usuario = "root";
    $contraseña = "";
    try {
        
        $DB = new PDO("mysql:host=$server;dbname=pac1", $usuario, $contraseña);
        $DB->query("set names utf8;"); 
        $DB->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //Intenta usar los statements nativos siempre, si no puede cogera los emulados
        $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $DB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); //establece el segundo parametro como default para fetch

        return $DB;
    } catch (Exception $e) {
        echo "Error obteniendo BD: " . $e->getMessage();
        return null;
    }
}
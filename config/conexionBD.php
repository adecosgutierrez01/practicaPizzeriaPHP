<?php
define("HOST", "localhost");
define("USERNAME", "dwes");
define("PASSWORD", "abc123.");
define("DATABASE", "pizzeria");

function getConexion()
{
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES uft8");
    try {
        $dwes = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USERNAME, PASSWORD);
        $dwes->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dwes;
    } catch (PDOException $e) {
        echo 'Error en la conexión: ' . $e->getMessage();
        exit();
    }
}

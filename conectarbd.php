<?php

function Conectar(){

    $Servidor = "localhost";
    $Based = "proyecto";
    $Usuario = "root";
    $Clave = "";

        try {
          $conn = new PDO("mysql:host=$Servidor;dbname=$Based;", $Usuario, $Clave);
        } catch (PDOException $e) {
          die('Connection Failed: ' . $e->getMessage());
        }
        return $conn;
    }
?>
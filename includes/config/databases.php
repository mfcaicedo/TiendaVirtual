<?php 

    header("Content-Type: text/html;charset=utf-8");

    //importacion a mi base de datos 
    function conectarDB(): mysqli{
        $db = mysqli_connect('localhost', 'root', 'root', 'tiendavirtual');
        $db->set_charset('utf8');
        
        if (!$db) {
            echo 'Error al conectar la base de datos';
            exit;
        }
        return $db;
    }

?>
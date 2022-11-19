<?php
    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://Jose:LrZT62vEFr1bPkjp@cluster0.8hvepxf.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente->selectDataBase("Cluster0");

    $tablaColeccion = $conexion->comentario;

    $resultado = $tablaColeccion->find();

    foreach($resultado as $r){
        #   var_dump($r);
        $apellido = isset($r->apellido)?$r->apellido:"";
       echo $r->_id . " - " . $r->nombre  . " - " . $r->correo  . " - " . $r->mensaje . " - " . $apellido .  "<br>";
    }
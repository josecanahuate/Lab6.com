<?php
    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://Jose:LrZT62vEFr1bPkjp@lab6.urwtlse.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente->selectDataBase("basedatos");
    
    $tablaColeccion = $conexion->comentario;

    $resultado = $tablaColeccion->insertOne(["nombre"  => $_GET["n"], 
                                             "correo"  => $_GET["c"],
                                             "mensaje" => $_GET["m"],
                                             "apellido"=> $_GET["a"]]);
    echo "Se insertó el registro con id " . $resultado->getInsertedId(); 



    

?>
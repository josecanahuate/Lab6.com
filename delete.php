<?php
    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://Jose:LrZT62vEFr1bPkjp@cluster0.8hvepxf.mongodb.net/?retryWrites=true&w=majority";
    
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente->selectDataBase("Cluster0");
    
    $tablaColeccion = $conexion->comentario;

    //$resultados = $tablaColeccion->deleteOne(["_id"=> new MongoDB\BSON\ObjectId($_GET["id"])]);
    echo "Registros eliminados ". $resultados->getDeletedCount();

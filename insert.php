<?php
    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://Jose:LrZT62vEFr1bPkjp@cluster0.8hvepxf.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente->selectDataBase("Cluster0");
    //Cluster0 --> NOMBRE DE LA BASE DE DATOS
    #var_dump($conexion);
    
    $tablaColeccion = $conexion->comentario;
    $resultado = $tablaColeccion->insertOne(["nombre"  => $_GET["n"], 
                                             "correo"  => $_GET["c"],
                                             "mensaje" => $_GET["m"],
                                             "apellido"=> $_GET["a"]]);
    echo "Se insertó el registro con id " . $resultado->getInsertedId(); 
    //http://lab6.com/insert.php?n=Juan%20Perez&c=jperez@gmail.com&m=este%20es%20un%20comentario&a=Gonzalez



    

?>
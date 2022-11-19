<?php
    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://Jose:LrZT62vEFr1bPkjp@cluster0.8hvepxf.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente->selectDataBase("Cluster0");
    
    $tablaColeccion = $conexion->comentario;
  /*  $id = $_GET["id"];
    $resultado = $tablaColeccion->updateOne(["_id" => new MongoDB\BSON\ObjectId($id)],
                                            ['$set' => [
                                                        "correo"=>$_GET["correo"],
                                                        "mensaje"=>$_GET["mensaje"]
                                                        ]  
                                            ]);
    echo "Cantidad de registros actualizados " . $resultado->getModifiedCount();
*/
    $resultado = $tablaColeccion->updateOne(["correo" => $_GET["correo"]],
    ['$set' => [
                "mensaje"=>$_GET["mensaje"]
                ]  
    ]);
echo "Cantidad de registros actualizaos " . $resultado->getModifiedCount();
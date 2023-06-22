<?php
    session_start();
    require "config.php";
    require "./sanitizacion.php";
    $conexion = connect ();
    if(!$conexion){
        echo "No se puedo conectar la base";
    }else{
        $sql = "DELETE FROM miembros_club WHERE ID_Usuario = ".$_SESSION["ID_Usuario"];
        $res = mysqli_query($conexion, $sql);
        $respuesta = array("mensaje" => "Has abandonado al club ".$_SESSION["Nombre"]);
        echo json_encode($respuesta);
    }
?>
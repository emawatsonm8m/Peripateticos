<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header('Location: ../../index.php');
    }
        /*Desarrollador: Eduardo Garduño 
    Proposito: En este archivo se verifica si el club al cual estas buscando ya estas adentro o si por el contrario aun no te has unido*/

    require "config.php";
    require "./sanitizacion.php";
    $conexion = connect ();
    if(!$conexion){
        echo "No se puedo conectar la base";
    }else{
        $existe = "SELECT * FROM miembros_club WHERE ID_Usuario = ".$_SESSION["ID_Usuario"];
        $buscando = mysqli_query($conexion, $existe);
        if(mysqli_num_rows($buscando) > 0){
            $respuesta = true;
            echo json_encode($respuesta);
        }else{
            $respuesta = false;
            echo json_encode($respuesta);
        }
    }
?>
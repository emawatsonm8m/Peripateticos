<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header('Location: ../../index.php');
    }

    require "config.php";
    require "./sanitizacion.php";
    $conexion = connect ();
    if(!$conexion){
        echo "No se puedo conectar la base";
    }else{
        $ID_Club = (isset($_POST["ID_Club"]) && $_POST["ID_Club"] != "")? $_POST["ID_Club"] : false;
        $sql = "INSERT INTO miembros_club (ID_Club, ID_Usuario) VALUES ($ID_Club, ".$_SESSION["ID_Usuario"].")";
        $res = mysqli_query($conexion, $sql);
        $respuesta = array("mensaje" => "Te has unido al club ".$_SESSION["Nombre"]);
        echo json_encode($respuesta);
    }
?>
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
        $club = (isset($_POST["club"]) && $_POST["club"] != "")? $_POST["club"] : false;
        $sql = "SELECT * FROM club WHERE Nombre = '$club'";
        $res = mysqli_query($conexion, $sql);
        $respuesta = [];
        while($row = mysqli_fetch_assoc($res)){
            $respuesta[] = $row;
        }
        echo json_encode($respuesta);
    }
?>
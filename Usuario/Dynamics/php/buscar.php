<?php
    session_start();
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
        $termino = (isset($_POST["termino"]) && $_POST["termino"] != "")? $_POST["termino"] : false;
        $sql = "SELECT * FROM Club WHERE Nombre LIKE '%$termino%'";
        $res = mysqli_query($conexion, $sql);
        $respuesta = [];
        while ($row = mysqli_fetch_assoc($res)){
            $respuesta[] = $row;
        }
        echo json_encode($respuesta);
    }
?>
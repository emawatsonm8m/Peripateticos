<?php
    session_start();
    require "config.php";
    require "./sanitizacion.php";
    $conexion = connect ();
    if(!$conexion){
        echo "No se puedo conectar la base";
    }else{
        // $img = (isset($_POST["img"]) && $_POST["img"] != "")? $_POST["img"] : false;
        $nombre = sanitizarCadenaSQL((isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false);
        $celular = sanitizarNumSQL((isset($_POST["celular"]) && $_POST["celular"] != "")? $_POST["celular"] : false);
        $instagram = sanitizarEmailSQL((isset($_POST["instagram"]) && $_POST["instagram"] != "")? $_POST["instagram"] : false);
        $regex1 = "[;]";
        $regex2 = "[\s]";
        $regex3 = "/^@(\w|\.){1,}/";

        if($nombre){
            $sql1 = "UPDATE usuario SET Nombre = '$nombre' WHERE Cuenta = ".$_SESSION["usuario"];
            $res1 = mysqli_query($conexion, $sql1);
            $_SESSION["Nombre"] = $nombre;
        }
        if($celular){
            $sql2 = "UPDATE usuario SET Celular = '$celular' WHERE Cuenta = ".$_SESSION["usuario"];
            $res2 = mysqli_query($conexion, $sql2);
            $_SESSION["Celular"] = $celular;
        }
        if($instagram){
            $sql3 = "UPDATE usuario SET Instagram = '$instagram' WHERE Cuenta = ".$_SESSION["usuario"];
            $res3 = mysqli_query($conexion, $sql3);
            $_SESSION["Instagram"] = $instagram;
        }
        $respuesta = array("mensaje" => "Datos actualizados");
        echo json_encode($respuesta);
    }
?>
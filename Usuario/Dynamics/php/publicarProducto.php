<?php

    // session_start();
    // if(!isset($_SESSION["usuario"])){
    //     header('Location: ../../index.php');
    // }

    
    $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
    $arch = (isset($_POST["arch"]) && $_POST["arch"] != "")? $_POST["arch"] : false;
    $descripcion = (isset($_POST["descripcion"]) && $_POST["descripcion"] != "")? $_POST["descripcion"] : false;
    $costo = (isset($_POST["costo"]) && $_POST["costo"] != "")? $_POST["costo"] : false;
    $fecha = (isset($_POST["fecha"]) && $_POST["fecha"] != "")? $_POST["fecha"] : false;
    $lugar = (isset($_POST["lugar"]) && $_POST["lugar"] != "")? $_POST["lugar"] : false;
    $hora = (isset($_POST["hora"]) && $_POST["hora"] != "")? $_POST["hora"] : false;

    if($_FILES["arch"])
    {
            $arch = $_FILES["arch"];
            $name = $arch["name"];
            $ruta_temp = $arch["tmp_name"];
            $ext = pathinfo($name, PATHINFO_EXTENSION);
            if(!file_exists('../../Statics/img'))
            {
                mkdir('../../Statics/img');
            }
            $nuevaRuta= "../../Statics/img/$name";
    }

    if($nombre && $arch && $descripcion && $costo && $fecha && $lugar && $hora)
    {
        ///$respuesta = array("nombre"=>$nombre, "archivo"=>$nuevaRuta, "descripcion"=>$descripcion, "costo"=>$costo, "fecha"=>$fecha, "lugar"=>$lugar, "hora"=>$hora);
        if(!$peticion)
            {
                $respuesta = array("ok"=>false, "mensaje" => "No se pudo publicar tu producto. Intentálo de nuevo más tarde.");
            } else{
                $respuesta = array("ok"=>true, "mensaje" => "Producto publicado. Ahora lo puedes ver en la opción tus productos.");
            }
        echo json_encode($respuesta);
    }

    else 
    {
        if(!$nombre)
            $respuesta = array("ok"=>false, "mensaje" => "No se especificó el Nombre del producto.");
        else if ( !$arch){
            $respuesta = array("ok"=>false, "mensaje" => "No se especificó la foto del producto.");
        }else if ( !$descripcion){
            $respuesta = array("ok"=>false, "mensaje" => "No se especificó la descripción del producto.");
        }else if ( !$costo){
            $respuesta = array("ok"=>false, "mensaje" => "No se especificó el costo del producto.");
        }else if(!$fecha){
            $respuesta = array("ok"=>false, "mensaje" => "No se especificó la fecha de venta del producto.");
        }else if(!$lugar){
            $respuesta = array("ok"=>false, "mensaje" => "No se especificó el lugar de entrega del producto.");
        }else if(!$hora){
            $respuesta = array("ok"=>false, "mensaje" => "No se especificó el horario disponible para la entrega.");
        }
        echo json_encode($respuesta);
    }

    
?>
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
            if(!file_exists('./img'))
            {
                mkdir('../../Statics/img');
            }
            $archivo =rename($ruta_temp, "./img/$nombre.$ext");
        }
    // if($nombre==true && $arch==true && $descripcion==true && $costo==true && $fecha==true && $lugar==true && $hora==true)
    //{
        $respuesta = array("nombre"=>$nombre, "archivo"=>$archivo, "descripcion"=>$descripcion, "costo"=>$costo, "fecha"=>$fecha, "lugar"=>$lugar, "hora"=>$hora);
        echo json_encode($respuesta);
        //mysqli_....
        // if(!$peticion)
        //     {
        //         $respuesta = array("ok"=>false, "mensaje" => "No se pudo publicar tu producto. Intentálo de nuevo más tarde.");
        //     } else{
        //         $respuesta = array("ok"=>true, "mensaje" => "Producto publicado. Ahora lo puedes ver entre la opción tus productos.");
        //     }
    //}

    // else 
    // {
    //     if($nombre==false)
    //     {
    //         $respuesta = array("ok"=>false, "nombre" => "No se especificó el Nombre del producto.");
    //     }
    // }
    //     }else if ( !$arch){
    //         $respuesta = array("ok"=>false, "mensaje" => "No se especificó la foto del producto.");
    //     }else if ( !$descripcion){
    //         $respuesta = array("ok"=>false, "mensaje" => "No se especificó la descripción del producto.");
    //     }else if ( !$costo){
    //         $respuesta = array("ok"=>false, "mensaje" => "No se especificó el costo del producto.");
    //     }else if(!$fecha){
    //         $respuesta = array("ok"=>false, "mensaje" => "No se especificó la fecha de venta del producto.");
    //     }else if(!$lugar){
    //         $respuesta = array("ok"=>false, "mensaje" => "No se especificó el lugar de entrega del producto.");
    //     }else if(!$hora){
    //         $respuesta = array("ok"=>false, "mensaje" => "No se especificó el horario disponible para la entrega.");
    //     }
    // }
    
    
    
?>
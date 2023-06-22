<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header('Location: ../../index.php');
    }


    require "config.php";
    $conexion = connect();
    if(!$conexion)
    {
        echo "No se pudo conectar con la base";
    }else
    {
        $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
        $arch = (isset($_POST["arch"]) && $_POST["arch"] != "")? $_POST["arch"] : false;
        $descripcion = (isset($_POST["descripcion"]) && $_POST["descripcion"] != "")? $_POST["descripcion"] : false;
        $fecha = (isset($_POST["fecha"]) && $_POST["fecha"] != "")? $_POST["fecha"] : false;
        $recompensa = (isset($_POST["recompensa"]) && $_POST["recompensa"] != "")? $_POST["recompensa"] : false;
        $lugar = (isset($_POST["lugar"]) && $_POST["lugar"] != "")? $_POST["lugar"] : false;

        if($_FILES["arch"])
        {
                $arch = $_FILES["arch"];
                $name = $arch["name"];
                $ruta_temp = $arch["tmp_name"];
                $ext = pathinfo($name, PATHINFO_EXTENSION);
                if(!file_exists('../../Statics/imgobj'))
                {
                    mkdir('../../Statics/imgobj');
                }
                $nuevaRuta= "../../Statics/imgobj/$name";
                rename($ruta_temp,$nuevaRuta);
        }

        if($lugar==true)
        {
            if($lugar=="Entrada")
                $lugar = 1;
            else if ($lugar=="Patio de Sextos")
                    $lugar = 2;
            else if ($lugar=="Patio de Cuartos")
                    $lugar = 3;
            else if ($lugar=="Patio de Quintos")
                    $lugar = 4;
            else if ($lugar=="Pulpo")
                    $lugar = 5;
            else if ($lugar=="Mesas")
                    $lugar = 6;
            else if ($lugar=="Canchas")
                    $lugar = 7;
            else if ($lugar=="Pimponeras")
                    $lugar = 8;
            else if ($lugar=="Los H")
                    $lugar = 9;
            else if ($lugar=="Biblioteca")
                    $lugar = 10;
            else if ($lugar=="Vestidores")
                    $lugar = 11;
        }
        
        if($nombre && $nuevaRuta && $descripcion && $fecha && $fecha && $recompensa && $lugar)
        {
            $usuario = 1; //CAMBIAR USUARIO CON SESIONES
            $sql = "INSERT INTO objeto (ID_Usuario, ID_PuntosPrepa, NombreObjeto, Foto, Descripcion, Recompensa, Fecha)
            VALUES ($usuario, $lugar,'$nombre', '$nuevaRuta', '$descripcion', '$recompensa', '$fecha')";
            $res = mysqli_query($conexion, $sql);
            //$id = mysqli_insert_id($conexion);
            if(!$res)
                $respuesta = array("ok"=>false, "mensaje" => "No se pudo realizar la publicación. Intentálo de nuevo más tarde.");
            else
                $respuesta = array("ok"=>true, "mensaje" => "Publicación hecha. Ahora lo puedes ver en la opción de Objetos Perdidos.");
                
            echo json_encode($respuesta);
        }

        else 
        {
            if(!$nombre)
                $respuesta = array("ok"=>false, "mensaje" => "No se especificó el nombre del objeto.");
            else if ( !$arch){
                $respuesta = array("ok"=>false, "mensaje" => "No se especificó la foto del objeto.");
            }else if ( !$descripcion){
                $respuesta = array("ok"=>false, "mensaje" => "No se especificó la descripción del objeto.");
            }else if ( !$fecha){
                $respuesta = array("ok"=>false, "mensaje" => "No se especificó la fecha en la que se encontró/perdió.");
            }else if(!$lugar){
                $respuesta = array("ok"=>false, "mensaje" => "No se especificó el lugar en el que se encontró/perdió.");
            }
            echo json_encode($respuesta);
        }
}



    
?>
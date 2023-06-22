<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header('Location: ../../index.php');
    }
    
    require "./config.php";
    $conexion= connect();
    if (!$conexion){
        echo "no se conceto con la base";
    }
    else{
        $id_producto = "SELECT ID_Producto FROM producto"; 
        $res_id = mysqli_query($conexion, $id_producto);
        $arregloid=[];
        while($row=mysqli_fetch_assoc($res_id)) //mete todos los id´s recibidos en un arreglo
        {
            $arregloid[] = $row["ID_Producto"];
        }
        $arregloinfo=[];
        foreach($arregloid as $localidad=>$valor)
        {
            $peticion = "SELECT ID_Producto, NombreProducto, Foto FROM producto WHERE ID_Producto = $valor ";
            $res_info = mysqli_query($conexion, $peticion);
            $respuesta = mysqli_fetch_assoc($res_info);
            $arregloinfo[]= array("id"=>$respuesta["ID_Producto"], "Nombre"=>$respuesta["NombreProducto"], "Foto"=>$respuesta["Foto"]); 
        }
        //var_dump($arregloinfo);
        echo json_encode($arregloinfo);
    }
?>
<?php
require "./config.php";
$conexion= connect();
if (!$conexion){
    echo "no se conceto con la base";
}
else{
    $id_objeto = "SELECT ID_Objeto FROM objeto"; 
    $res_id = mysqli_query($conexion, $id_objeto);
    $arregloid=[];
    while($row=mysqli_fetch_assoc($res_id)) //mete todos los id´s recibidos en un arreglo
    {
        $arregloid[] = $row["ID_Objeto"];
    }
    $arregloinfo=[];
    foreach($arregloid as $localidad=>$valor)
    {
        $peticion = "SELECT ID_Objeto, NombreObjeto, Foto FROM objeto WHERE ID_Objeto = $valor ";
        $res_info = mysqli_query($conexion, $peticion);
        $respuesta = mysqli_fetch_assoc($res_info);
        $arregloinfo[]= array("id"=>$respuesta["ID_Objeto"], "Nombre"=>$respuesta["NombreObjeto"], "Foto"=>$respuesta["Foto"]); 
    }
    //var_dump($arregloinfo);
    echo json_encode($arregloinfo);
}



?>
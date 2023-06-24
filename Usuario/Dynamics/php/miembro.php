<?php
    session_start();
    require "./config.php";

    $conexion = connect();
    $peticion = "SELECT * FROM miembros_club";
    $query = mysqli_query($conexion,$peticion);
    $respuesta = [];
    while($row = mysqli_fetch_assoc($query)){
        $respuesta[] = $row;
    }
    echo json_encode($respuesta);
?>
<?php
    $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
    $arch = (isset($_POST["arch"]) && $_POST["arch"] != "")? $_POST["arch"] : false;
    $descripcion = (isset($_POST["descripcion"]) && $_POST["descripcion"] != "")? $_POST["descripcion"] : false;
    $costo = (isset($_POST["costo"]) && $_POST["costo"] != "")? $_POST["costo"] : false;
    $fecha = (isset($_POST["fecha"]) && $_POST["fecha"] != "")? $_POST["fecha"] : false;

    echo json_encode($nombre);
?>
<?php
    //En este apartado ingresaremos en la base de datos
    $user = (isset($_POST["user"]) && $_POST["user"] != "")? $_POST["user"] : false;
    $pass = (isset($_POST["pass"]) && $_POST["pass"] != "")? $_POST["pass"] : false;
    $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
    $genero = (isset($_POST["genero"]) && $_POST["genero"] != "")? $_POST["genero"] : false;
    $pronombre = (isset($_POST["pronombre"]) && $_POST["pronombre"] != "")? $_POST["pronombre"] : false;

    // si ya existe ese usuario no volver a crear
    if(){
        
    }else{
        // se guarda en base de datos y...

        header('Location: ../../index.php');
    }
?>
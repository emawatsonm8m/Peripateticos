<?php
    //En este apartado ingresaremos en la base de datos
    $user = (isset($_POST["user"]) && $_POST["user"] != "")? $_POST["user"] : false;
    $contraseña = (isset($_POST["contraseña"]) && $_POST["contraseña"] != "")? $_POST["contraseña"] : false;
    $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
    $celular = (isset($_POST["celular"]) && $_POST["celular"] != "")? $_POST["celular"] : false;
    $instagram = (isset($_POST["instagram"]) && $_POST["instagram"] != "")? $_POST["instagram"] : false;

    // si ya existe ese usuario no volver a crear
    if(){
        
    }else{
        // se guarda en base de datos y...

        header('Location: ../../index.php');
    }
?>
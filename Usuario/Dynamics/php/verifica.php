<?php
    //si no hay sesion iniciada te regresa al index
    session_start();
    if(!isset($_SESSION["usuario"])){
        header('Location: ../../index.php');
    }

    $usuario = (isset($_POST["usuario"]) && $_POST["usuario"] != "")? $_POST["usuario"] : false;
    $contraseña = (isset($_POST["contraseña"]) && $_POST["contraseña"] != "")? $_POST["contraseña"] : false;

    //si los dos se 
    if($usuario && $contraseña){
        //hacer que se verifique si existe o no en la base de datos


        //si existe ese usuario y contraseña te manda al ...
        if(){
            session_start();
            $_SESSION["usuario"] = $usuario;
            $_SESSION["contraseña"] = $contraseña;
            header('Location: ./Dynamics/php/...'); //... Debe ir la ruta faltante
        }else{
            echo "No existe ese usuario y/o contraseña";
        }
    }else{
        echo "Inicia sesión";
    }
?>
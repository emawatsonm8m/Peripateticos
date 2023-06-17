<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header('Location: ../../index.php');
    }

    require "config.php";
    require "contraseña.php";
    $conexion = connect ();

    if(!$conexion){
        echo "No se pudo conectar con la base de datos";
    }else{
        $usuario = (isset($_POST["usuario"]) && $_POST["usuario"] != "")? $_POST["usuario"] : false;
        $contraseña = (isset($_POST["contraseña"]) && $_POST["contraseña"] != "")? $_POST["contraseña"] : false;
    
        //si los dos datos llegan
        if($usuario && $contraseña){
            $existe = "SELECT * FROM usuario WHERE Cuenta = '$usuario'";
            $buscando = mysqli_query($conexion, $existe);
            if(mysqli_num_rows($buscando) == 0){        //verifica si existe un registro con ese usuario
                echo "Ese usuario no existe";
            }else{
                $sql = "SELECT Contraseña FROM Usuario WHERE Cuenta = '$usuario'";
                $correcta = mysqli_query($conexion, $sql);
                $sql1 = "SELECT Sal FROM Usuario WHERE Cuenta = '$usuario'";
                $sal = mysqli_query($conexion, $sql1);

                $verificacion = verificarContra($contraseña, $correcta, $sal);
                if($verificacion){        //verifica que la contraseña sea la misma
                    session_start();
                    $_SESSION["usuario"] = $usuario;
                    header('Location: ./Dynamics/php/...');
                }else{
                    echo "Contraseña incorrecta";
                }
            }
        }else{
            echo "Regresa a poner el dato que te falto";
        }
    }
?>
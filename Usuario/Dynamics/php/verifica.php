<?php
    /*session_start();
    if(isset($_SESSION["usuario"])){
        header('Location: ./...');
    }*/

    require "./config.php";
    require "./contraseña.php";
    require "./sanitizacion.php";
    $conexion = connect ();

    if(!$conexion){
        echo "No se pudo conectar con la base de datos";
    }else{
        $usuario = sanitizarNumSQL((isset($_POST["usuario"]) && $_POST["usuario"] != "")? $_POST["usuario"] : false);
        $contraseña = sanitizarEmailSQL((isset($_POST["contraseña"]) && $_POST["contraseña"] != "")? $_POST["contraseña"] : false);
        $regex1 = "[;]";
        $regex2 = "[\s]"; 

        if(strlen($usuario) != 9)
            echo "Faltaron o sobraron números";
        else if(strlen($contraseña) < 8 || preg_match($regex1, $contraseña) == 1 || preg_match($regex2, $contraseña) == 1)
            echo "Contraseña incorrecta";
        else{
            $existe = "SELECT * FROM usuario WHERE Cuenta = '$usuario'";
            $buscando = mysqli_query($conexion, $existe);
            if(mysqli_num_rows($buscando) == 0){        //verifica si existe un registro con ese usuario
                echo "Ese usuario no existe";
            }else{
                $sql = "SELECT Contraseña, Sal FROM Usuario WHERE Cuenta = '$usuario'";
                $res = mysqli_query($conexion, $sql);
                while($respuesta = mysqli_fetch_assoc($res)){
                    $correcta = $respuesta['Contraseña'];
                    $sal = $respuesta['Sal'];
                }
                $verificacion = verificarContra($contraseña, $correcta, $sal);
                if($verificacion){        //verifica que la contraseña sea la misma
                    session_start();
                    $_SESSION["usuario"] = $usuario;

                    header('Location: ./inicio.php'); //ruta momentanea
                }else{
                    echo "Contraseña incorrecta";
                }
            }
        }
    }
?>
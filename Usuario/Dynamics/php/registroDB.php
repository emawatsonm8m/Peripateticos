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
        $user = sanitizarNumSQL((isset($_POST["user"]) && $_POST["user"] != "")? $_POST["user"] : false);
        $contraseña = sanitizarEmailSQL((isset($_POST["contraseña"]) && $_POST["contraseña"] != "")? $_POST["contraseña"] : false);
        $nombre = sanitizarCadenaSQL((isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false);
        $celular = sanitizarNumSQL((isset($_POST["celular"]) && $_POST["celular"] != "")? $_POST["celular"] : false);
        $instagram = sanitizarEmailSQL((isset($_POST["instagram"]) && $_POST["instagram"] != "")? $_POST["instagram"] : false);
        $regex1 = "[;]";
        $regex2 = "[\s]";
        $regex3 = "/^@(\w|\.){1,}/";

        if(strlen($user) != 9)
            echo "Tu usuario debe llevar solo números";
        else if(strlen($contraseña) <= 8 || preg_match($regex1, $contraseña) == 1 || preg_match($regex2, $contraseña) == 1) // Esta raro....
            echo "Tu contraseña no debe llevar espacios ni ;";
        else if(strlen($nombre) >= 20 || preg_match($regex1, $nombre) == 1)
            echo "Tu nombre es muy largo y/o no debe llevar ;";
        else if(strlen($celular) != 10)
            echo "Tu numero le faltan o sobran caracteres";
        else if(strlen($instagram) >= 20 || preg_match($regex1, $instagram) == 1 || preg_match($regex3, $instagram) == 0)
            echo "Tu instagram no es correcto";
        else{
            $sal = generarSal();
            $pimienta = generarPimienta();
            $contraHash = hashearContra($contraseña.$pimienta.$sal);

            $existe = "SELECT * FROM usuario WHERE Cuenta = '$user'";
            $buscando = mysqli_query($conexion, $existe);
            if(mysqli_num_rows($buscando) > 0){     // si ya existe ese usuario no volver a crear
                echo "Ese usuario ya esta registrado";
            }else{      //se guarda en base de datos y redirige
                $sql = "INSERT INTO usuario (Cuenta, Nombre, Contraseña, Instagram, Celular, Sal) VALUES ('$user', '$nombre', '$contraHash', '$instagram', '$celular', '$sal')";
                $res = mysqli_query($conexion, $sql);
                header('Location: ../../index.php');
            }
        }
    }
?>
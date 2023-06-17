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

        if(strlen($user) != 9)
            echo "Faltaron o sobraron números";
        else if(strlen($contraseña) < 8)
            echo "Tu contraseña tiene pocos caracteres";
        else if(strlen($nombre) > 20)
            echo "Tu nombre es muy largo";
        else if(strlen($celular) != 10)
            echo "Tu numero le faltan o sobran caracteres";
        else if(strlen($instagram) > 20)
            echo "Instagram muy largo";
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
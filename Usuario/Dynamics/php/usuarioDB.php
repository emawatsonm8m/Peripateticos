<?php
    require "config.php";
    $conexion = connect ();

    if(!$conexion){
        echo "No se pudo conectar con la base de datos";
    }else{
        $user = (isset($_POST["user"]) && $_POST["user"] != "")? $_POST["user"] : false;
        $contraseña = (isset($_POST["contraseña"]) && $_POST["contraseña"] != "")? $_POST["contraseña"] : false;
        $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
        $celular = (isset($_POST["celular"]) && $_POST["celular"] != "")? $_POST["celular"] : false;
        $instagram = (isset($_POST["instagram"]) && $_POST["instagram"] != "")? $_POST["instagram"] : false;

        // La funcion de hashear, sal y pimienta debemos de recibirla aqui, para igual registrarla en la base de datos

        if($user && $contraseña && $nombre && $celular && $instagram){
            $existe = "SELECT * FROM Usuario WHERE Cuenta = '$user'";
            $buscando = mysqli_query($conexion, $existe);
            if(mysqli_num_rows($buscando) > 0){     // si ya existe ese usuario no volver a crear
                echo "Ese usuario ya esta registrado";
            }else{      //se guarda en base de datos y redirige
                $sql = "INSERT INTO Usuario(Cuenta, Nombre, Contraseña, Instagram, Celular, Sal, Pim) VALUES ('$user', '$nombre', '$contraseñaHasheada', '$instagram', '$celular', $sal, $pimienta)";
                $res = mysqli_query($conexion, $sql);
                header('Location: ../../index.php');
            }
        }else
            echo "Te falto llenar algun dato...";
    }
?>
<?php
    session_start();
    // if(!isset($_SESSION["usuario"])){
    //     header('Location: ../../index.php');
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Statics/styles/perfil.css">
    <title>Perfil</title>
</head>
<body>
    <?php
        // require "./config.php";
        // $conexion = connect ();
        // if(!$conexion){
        //     echo "No se pudo conectar con la base de datos";
        // }else{
        //     $sql = "SELECT Nombre, Instagram, Celular, Foto_Perfil FROM usuario WHERE Cuenta = ".$_SESSION['usuario'];
        //     $res = mysqli_query($conexion,$sql);
        //     while($respuesta = mysqli_fetch_assoc($res)){
        //         $nombre = $respuesta['Nombre'];
        //         $instagram = $respuesta['Instagram'];
        //         $celular = $respuesta ['Celular'];
        //         $fotoPerfil = $respuesta['Foto_Perfil'];
        //     }
        // }
    //  <nav class="NavBar">
    //         <ul>
    //             <li><img src="../Statics/media/EscudoP6.png" id="P6" alt="Prepa_6">
    //             <img src="../Statics/media/EscudoUNAM.png" id="UNAM"alt="UNAM"></li>
    //             <li><a href="#" class="TextSelect">Ventas</a></li>
    //             <li><a href="#" class="TextSelect">Objetos perdidos</a></li>
    //             <li><a href="#" class="TextSelect">Comunidad P6</a></li>
    //             <li><a href="#"><img src="../Statics/media/PerfilVacio.png" id="FP" alt="FotoPerfil"></a></li>
    //         </ul>
    //     </nav>
    echo '<main> 
        <section id="Perfil" class="DatosPerfil">
            <h2>Tu perfil</h2>
            <div>
                <img src="../../Statics/media/PerfilVacio.png" alt="FotoPerfil" height="60" width="60">
            </div>
            <div class="info">
                Usuario: '.$_SESSION["ID_Usuario"].'
            </div>
            <div class="info">
                Contraseña:
                <!--para poner la imagen del ojo que abre y cierra-->
            </div>
            <div class="info">
                Nombre: '.$_SESSION["Nombre"].'
            </div>
            <div class="info">
                Número de celular: '.$_SESSION["Celular"].'
            </div class="info"> 
            <div class="info">
                Instagram: '.$_SESSION["Instagram"].'
            </div>
            <div class="Botones">
                <button class="BotonPerfil" id="Editar">Editar perfil</button>
                <button class="BotonPerfil" id="Salir">Cerrar Sesión</button>
            </div>
        </section>
        <!-- <section class="Derecha">
            <article id="Publicaciones">
                <h2>Tus public∫aciones</h2>
                <div id="comentario">
                    <img src="../Statics/media/PerfilVacio.png" alt="FotoPerfil" height="20" width="20">
                    <p>Mensaje   pesta parte se conecta con la base de datos
                    <div><button class="EditPublicacion"></button></div>
                </div>
            </article>
            <article id="Comunidad">
                <h2>Comunidad</h2>
                <div id="Publicacion">
                    <button class="EditPublicacion"></button>
                </div>
            </article>
        </section>-->
    </main>';
    ?>
    <script src="../js/perfil.js"></script>
</body>
</html>
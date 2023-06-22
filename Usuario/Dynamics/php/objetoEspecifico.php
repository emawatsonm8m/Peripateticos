<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header('Location: ../../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../libs/bootstrap-5.3.0-dist (1)/bootstrap-5.3.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../Statics/styles/productoNuevo.css">
    <link rel="stylesheet" href="../../Statics/styles/navs.css">
    <link rel="icon" href="../../Statics/media/logo.png" type="image/icon">
    <script src="../js/navs.js"></script>
    <title>Objeto</title>
</head>
<body>
    <!-- NAV -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img class="img" src="../../Statics/media/logo.png" alt="Red Coyote" id="prepa6">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <article class="pagRedireccion" id="pagPrincipal">Pagina principal</article>
            <article class="pagRedireccion" id="ventas">Ventas</article>
            <article class="pagRedireccion" id="objPerdidos">Objetos perdidos</article>
            <article class="pagRedireccion" id="comunidad">Comunidad P6</article>
        </ul>
        <article class="fotoUsuario" id="perfil"><!--Foto de usuario BD--></article>
    </div>
</nav>
</body>
</html>
  <!-- CONTENIDO -->
<?php

    require "config.php";
    $conexion = connect();
    if(!$conexion)
        echo "No se pudo conectar con la base";
    else
    {
        // Datos del producto //
        $id = $_COOKIE["objeto"];
        $sql="SELECT NombreObjeto, Foto, Descripcion, Recompensa, Fecha, ID_PuntosPrepa FROM objeto NATURAL JOIN puntosprepa WHERE ID_OBJETO=$id;"; //ASIGNAR ID_PRODUCTO con la vista de productos
        $res = mysqli_query($conexion, $sql);
        $respuesta = mysqli_fetch_assoc($res);
        $nombre = $respuesta["NombreObjeto"];
        $foto = $respuesta["Foto"];
        $objeto = "$foto";
        $descripcion = $respuesta["Descripcion"];
        $recompensa = $respuesta["Recompensa"];
        $fecha = $respuesta["Fecha"];
        $id_lugar = $respuesta["ID_PuntosPrepa"];
        // Datos del lugar //
        $peticion="SELECT Nombre, Foto_Lugar FROM puntosprepa WHERE ID_PuntosPrepa = '$id_lugar';";
        $regresa = mysqli_query($conexion, $peticion);
        $answer = mysqli_fetch_assoc($regresa);
        $lugar = $answer["Nombre"];
        $imagen_lugar = $answer["Foto_Lugar"];
        $img = "$imagen_lugar";
    echo 
    '<main>
        <aside>
            <article id="visto">
                <h3>Última vez visto</h3>
                <div id="center-img"><img id="mapa" class="img-fluid" src=',"'$img'",'></div>
                <div id="up">
                    <div id="horario">'; echo $lugar; echo' </div>
                </div>
            </article>
            <article id="contacto">
                <h3>Contacta a quien publicó</h3>
                <div id="celular">
                    <img src="../../Statics/media/publicarProducto/cel.png" class="img-fluid" id="cel">
                    <div class="texto">55</div> 
                </div>
                <div id="instagram">
                    <img src="../../Statics/media/publicarProducto/ig.png" class="img-fluid" id="ig">
                    <div class="texto">@</div>
                </div>
            </article>  
        </aside>  
        <section id="producto">
            <div id="nombre">'; echo $nombre; echo'</div>
            <div><img id="imagen" class="img-fluid" src=',"$objeto",'></div>
            <div id="descripcion">
                <div class="text">Descripción:</div>
                <div class="despliegue" id="cuadro">'; echo $descripcion; echo'</div>
            </div>
            <div id="down2">
                <div class="centrar">
                    <div class="text">Recompensa solicitada/dada</div>
                    <div class="despliegue" id="cuadritos">'; echo $recompensa; echo'</div>
                </div>
                <div class="centrar">
                    <div class="text">Fecha en la que se perdió/encontró</div>
                    <div class="despliegue" id="cuadritos">'; echo $fecha; echo'</div>
                </div>
            </div>

        </section>
  <main>';
}
?>
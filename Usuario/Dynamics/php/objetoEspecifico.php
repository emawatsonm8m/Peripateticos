<?php
    /*Desarrolador: Luana Alvarez
    Propósito: Este código a través de la cookie enviada por el archivo objetos.js designa el id del objeto seleccionado, para así igualarlo en la petición a mysql
    y poder desplegar toda la información del mismo. A su vez imprime toda la información que recibe y se le da formato con el archivo productoNuevo.css ubicado en 
    la carpeta Statics/style*/ 
    session_start();
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
    <nav>
      <section class="img">
        <img src="../../Statics/media/logo.png" alt="Red Coyote" id="prepa6">
        <!-- <img src="../Statics/media/EscudoP6.jpg" alt="ENP6" id="prepa6"> -->
        <!-- <img src="../Statics/media/EscudoUNAM.jpg" alt="UNAM" id="UNAM"> -->
      </section>
      <section class="pags">
          <article class="pagRedireccion" id="pagPrincipal">Pagina principal</article>
          <article class="pagRedireccion" id="ventas">Ventas</article>
          <article class="pagRedireccion" id="objPerdidos">Objetos perdidos</article>
          <article class="pagRedireccion" id="comunidad">Comunidad P6</article>
          <?php echo '<article class="fotoUsuario" id="perfil"><img src="'.$_SESSION["Foto_Perfil"].'"></article>'?>
      </section>
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
                    <div class="texto">'.$_SESSION["Celular"].'</div> 
                </div>
                <div id="instagram">
                    <img src="../../Statics/media/publicarProducto/ig.png" class="img-fluid" id="ig">
                    <div class="texto">'.$_SESSION["Instagram"].'</div>
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
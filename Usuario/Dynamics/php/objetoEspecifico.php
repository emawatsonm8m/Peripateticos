<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../../libs/bootstrap-5.3.0-dist (1)/bootstrap-5.3.0-dist/css/bootstrap.css">
            <link rel="stylesheet" href="../../Statics/styles/productoNuevo.css">
            <link rel="stylesheet" href="../../Statics/styles/navs.css">
            <link rel="icon" href="../../Statics/media/logo.png" type="image/icon">
            <title>Objeto</title>
            <!--Estos links contienen "codigo" que ayudan a aplicar el estilo, hacerlo responsivo y algunas animaciones de js, pero yo no use-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                <img  class="escudop6" id="vacio"src="../../statics/media/EscudoP6.jpg" alt="dos" width="80" height="80" >
                <img  class="unamescudo" id="vacio"src="../../statics/media/EscudoUNAM.jpg" alt="dos" width="80" height="80" >
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li  class="pagRedireccion" class="nav-item"><a class="nav-link" id="pagPrincipal" href="#">Página principal</a></li>
                            <li  class="pagRedireccion" class="nav-item"><a class="nav-link" id="ventas"href="#!">Ventas</a></li>
                            <li  class="pagRedireccion" class="nav-item"><a class="nav-link" id="objPerdidos"href="#!">Objetos perdidos</a></li>
                            <li  class="pagRedireccion" class="nav-item"><a class="nav-link" id="comunidad"href="#!">Comunidad P6</a></li>
                        </ul>
                    </div>
                    <img  class="fotoUsuario" id="perfil" src="idk" alt="fperfil" width="80" height="80"  ><!--Foto de usuario BD-->
                </div>
            </nav>

<body>
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
        $sql="SELECT NombreObjeto, Foto, Descripcion, Recompensa, Fecha, ID_PuntosPrepa FROM objeto NATURAL JOIN puntosprepa WHERE ID_OBJETO=3;"; //ASIGNAR ID_PRODUCTO con la vista de productos
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
        <div  class="container overflow-hidden text-center">
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
                <!-- Aqui tengo problemas con las imagenes pero alrato que llegue a mi casa las arreglos ;(-->
                    <input class="form-control" type="text" placeholder="Buscar..." aria-label="+52" aria-describedby="button-search" <img src="../../Statics/media/publicarProducto/cel.png" class="img-fluid" id="cel">/>
                </div>
                <div id="instagram">
                <input class="form-control" type="text" placeholder="@" aria-label="Buscar..." aria-describedby="button-search"<img src="../../Statics/media/publicarProducto/ig.png" class="img-fluid" id="ig"> />
                </div>
            </article>  
        </aside>
        <div  class="container overflow-hidden text-center">
        <div>  
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
        <div>
  <main>';
}
?>
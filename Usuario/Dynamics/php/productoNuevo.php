<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../../libs/bootstrap-5.3.0-dist (1)/bootstrap-5.3.0-dist/css/bootstrap.css">
            <link rel="stylesheet" href="../../Statics/styles/productoNuevo.css">
            <link rel="stylesheet" href="../../Statics/styles/navs.css">
            <link rel="icon" href="../../Statics/media/logo.png" type="image/icon">
            <title>Producto</title>
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
                        <li class="pagRedireccion"  class="nav-item"><a class="nav-link" href="#" id="pagPrincipal">Página principal</a></li>
                        <li class="pagRedireccion"  class="nav-item"><a class="nav-link" href="#!" id="ventas">Ventas</a></li>
                        <li class="pagRedireccion"  class="nav-item"><a class="nav-link" href="#!" id="objPerdidos">Objetos perdidos</a></li>
                        <li class="pagRedireccion"  class="nav-item"><a class="nav-link" href="#!" id="comunidad" >Comunidad P6</a></li>
                    </ul>
                </div>
            </div>
            <img  class="fotoUsuario" id="perfil" class="escudop6" id="vacio" src="../../Statics/media/logo.png" alt="UNAM" id="UNAM" width="80" height="80" >
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
        $sql="SELECT NombreProducto, Foto, Descripcion, Costo, FechaVenta, Horario, ID_PuntosPrepa FROM producto NATURAL JOIN puntosprepa WHERE ID_PRODUCTO=14;"; //ASIGNAR ID_PRODUCTO con la vista de productos
        $res = mysqli_query($conexion, $sql);
        $respuesta = mysqli_fetch_assoc($res);
        $nombre = $respuesta["NombreProducto"];
        $foto = $respuesta["Foto"];
        $producto = "$foto";
        $descripcion = $respuesta["Descripcion"];
        $costo = $respuesta["Costo"];
        $fecha = $respuesta["FechaVenta"];
        $horario = $respuesta["Horario"];
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
    <!--En general me falta alinar algunas cosas de proporcion pero ya se le puede meter diseño-->
                <div id="up">
                <!--Este es  como el "margen"-->
                <div class="col-lg-4">
                    <!-- Esta parte es como el titulo-->
                    <div class="card mb-4">
                        <div class="card-header">Puntos de venta</div>
                        <div class="card-body">
                            <div class="input-group">
                            <div id="center-img"><img id="mapa" class="img-fluid" src=',"'$img'",'></div>
                                <div class="text">Descripción:</div>
                                <div class="leyenda">Este punto de venta y horario fueron designados por el vendedor, si no se adecuan a tu disponibilidad recuerda que puedes contactar al vendedor y acordar la entrega en un punto/horario distinto</div>
                            </div>
                            <div id="down">
                            <div class="centrar">
                           </div>
                                <div class="text">Lugar de entrega</div>
                                <div class="despliegue" id="cuadritos">'; echo $horario; echo'</div>
                            </div>
                            <div class="centrar">
                                <div class="text">Fecha de disponibilidad</div>
                                <div class="despliegue" id="cuadritos">'; echo $fecha; echo'</div>
                            </div>
                        </div>
                        </div>
                        </div>
                    
            <div class="col-lg-4">
            <!-- Esta parte es como el titulo-->
            <div class="card mb-4">
                <div class="card-header">Contacta con el vendedor</div>
                <div class="card-body">
                    <div class="input-group">
                        <div class="text">Descripción:</div>
                        <div class="leyenda">Este punto de venta y horario fueron designados por el vendedor, si no se adecuan a tu disponibilidad recuerda que puedes contactar al vendedor y acordar la entrega en un punto/horario distinto</div>
                    </div>
                    <div id="down">
                    <div class="centrar">
                   </div>
                   <img src="../../Statics/media/publicarProducto/cel.png" class="img-fluid" id="cel">
                   <div class="texto">55</div> 
                    </div>
                    <img src="../../Statics/media/publicarProducto/ig.png" class="img-fluid" id="ig">
                    <div class="texto">@</div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        <!--Este es  como el "margen"-->
        <div class="col-lg-4">
            <!-- Esta parte es como el titulo-->
            <div class="card mb-4">
                <div class="card-header">'; echo $nombre; echo'</div>
                <div class="card-body">
                    <div class="input-group">
                        <img id="imagen" class="img-fluid" src=',"$producto",'>
                        <div class="text">Descripción:</div>
                    <div class="despliegue" id="cuadro">'; echo $descripcion; echo'</div>
                    </div>
                    <div id="down">
                    <div class="centrar">
                        <div class="text">Lugar de entrega</div>
                        <div class="despliegue" id="cuadritos">'; echo $lugar; echo'</div>
                    </div>
                    <div class="centrar">
                        <div class="text">Fecha de disponibilidad</div>
                        <div class="despliegue" id="cuadritos">'; echo $fecha; echo'</div>
                    </div>
                </div>
                </div>
            </div>
        </section>
  <main>';
}
?>
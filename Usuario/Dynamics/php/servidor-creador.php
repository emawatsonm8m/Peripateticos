<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor-Creador</title>
    <link rel="icon" href="../../Statics/media/logo.png" type="image/icon">
    <link rel='stylesheet' href='../../Statics/styles/servidor-creador.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src='../js/servidor-creador.js'></script>
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
                         <!-- La primera clase hace el dieseñp( color, letra,etc) la segunda y tercera es parte de la resposividad-->
                        <li  class="pagRedireccion" class="nav-item"><a class="nav-link" id="pagPrincipal" href="#">Página principal</a></li>
                        <li  class="pagRedireccion"class="nav-item"><a class="nav-link" id="ventas" href="#!">Ventas</a></li>
                        <li  class="pagRedireccion"class="nav-item"><a class="nav-link"  id="objPerdidos" href="#!">Objetos perdidos</a></li>
                        <li  class="fotoUsuario" class="nav-item"><a class="nav-link"  id="perfil" href="#!">Comunidad P6</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</head>
<body>
    
</body>
</html>
<?php
    require "./config.php";
    require "./sanitizacion.php";

    $conexion = connect (); //Conexión con la base de datos
    $ID_CLUB_Sanitizado = $_COOKIE["ID_CLUB"];
    $ID_CLUB_Sanitizado = (int)$ID_CLUB_Sanitizado;
    $peticion = "SELECT * FROM club WHERE ID_Club=$ID_CLUB_Sanitizado"; //petición
    $query = mysqli_query($conexion, $peticion);
    $info_club = mysqli_fetch_assoc($query); //Información que regreso la petición
    $info_club["PFP"] = "\"".$info_club['PFP']."\"";
    $info_club["Portada"] = "\"".$info_club['Portada']."\"";
    echo
    "
        <body>
            <br>
            <main>
                <img id='PortadaServer' src=".$info_club["Portada"]." alt='Portada del servidor'></img>
                <img id='pfpServer' src=".$info_club["PFP"]." alt='Foto de perfil del servidor'></img>
                <button id='editar'>Editar</button>
                <div id='linkServer'>...</div>
                <section id='infoServer'>
                    <article id='nombreServer' class='infoServer'>Nombre del servidor: ".$info_club["Nombre"]."</article>
                    <article id='categoria' class='infoServer'>Categoria: ".$info_club["Tipo"]."</article>
                </section>
                <section id='descripcion_reglas'>
                    <article id='descipcion'>Descripción: <br>".$info_club["Descripcion"]."</article>
                    <article id='reglas'>Reglas: <br>".$info_club["Reglas"]."</article>
                </section>
                <br>
                <section id='chatServer'>Chat del servidor
                    <div id='agregarMSJ'>+</div>
                </section>
            </main>
            <script src='../../libs/bootstrap-5.3.0-dist (1)/bootstrap-5.3.0-dist/js/bootstrap.bundle.js'></script>
        </body>
        </html>
    ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor-Creador</title>
    <link rel="icon" href="../../Statics/media/logo.png" type="image/icon">
</head>
<body>
    
</body>
</html>
<?php
    require "./config.php";
    $conexion = connect (); //Conexión con la base de datos
    $peticion = "SELECT * FROM club WHERE ID_Club=4"; //petición
    $query = mysqli_query($conexion, $peticion);
    $info_club = mysqli_fetch_assoc($query); //Información que regreso la petición
    $info_club["Nombre"] = utf8_encode($info_club["Nombre"]);
    $info_club["Descripcion"] = utf8_encode($info_club["Descripcion"]);
    $info_club["Reglas"] = utf8_encode($info_club["Reglas"]);
    $info_club["Tipo"] = utf8_encode($info_club["Tipo"]);
    $info_club["Proposito"] = utf8_encode($info_club["Proposito"]);
    $info_club["PFP"] = utf8_encode($info_club["PFP"]);
    $info_club["Portada"] = utf8_encode($info_club["Portada"]);
    $info_club["PFP"] = "\"".$info_club['PFP']."\"";
    $info_club["Portada"] = "\"".$info_club['Portada']."\"";
    echo
    "
        <!DOCTYPE html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='../../libs/bootstrap-5.3.0-dist (1)/bootstrap-5.3.0-dist/css/bootstrap.css'>
            <link rel='stylesheet' href='../../Statics/styles/servidor-creador.css'>
            <script src='../js/servidor-creador.js'></script>
            <title>Document</title>
        </head>
        <body>
            <br>
            <header>
                <nav class='navbar navbar-expand-lg bg-body-tertiary'>
                    <div id='logos'>
                        <img id='P6' src='../../statics/media/EscudoP6.jpg' alt='Escudo de la P6'></img>
                        <img id='unam' src='../../statics/media/EscudoUNAM.jpg' alt='Escudo de la UNAM'></img>
                    </div>
                    <div class='container-fluid'>
                        <div class='navbar-brand'></div>
                        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                        </button>
                        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                        <br><br>
                        <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                            <li class='nav-item'>
                                <button id='pfp' class='nav'></button>
                            </li>
                            <br>
                            <li class='nav-item'>
                                <button id='paginaPrincipal' class='nav'>Página Principal</button>
                            </li>
                            <br>
                            <li class='nav-item'>
                                <button id='Ventas' class='nav'>Ventas</button>
                            </li>
                            <br>
                            <li class='nav-item'>
                                <button id='ObjetosPerdidos' class='nav'>Objetos Perdidos</button>
                            </li>
                            <br>
                            <li>
                                <button id='ComunidadP6' class='nav'>Comunidad 
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </header>
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
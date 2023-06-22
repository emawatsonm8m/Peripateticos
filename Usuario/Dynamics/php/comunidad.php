<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header('Location: ../../index.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!--Estos links contienen "codigo" que ayudan a aplicar el estilo, hacerlo responsivo y algunas animaciones de js, pero yo no use-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidad P6</title>
    <link rel="stylesheet" href="../../Statics/styles/pagPrincipales.css">
    <!-- <link rel="stylesheet" href="../../Statics/styles/comunidad.css"> -->
    <link rel="stylesheet" href="../../Statics/styles/navs.css">
    <link rel="icon" href="../../Statics/media/logo.png" type="image/icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="../js/navs.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
            <img  class="escudop6" id="vacio"src="../../statics/media/EscudoP6.jpg" alt="dos" width="80" height="80" >
            <img  class="unamescudo" id="vacio"src="../../statics/media/EscudoUNAM.jpg" alt="dos" width="80" height="80" >
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" class="pags">
                        <li class="pagRedireccion"  class="nav-item"><a class="nav-link" href="#" id="pagPrincipal">Página principal</a></li>
                        <li class="pagRedireccion"  class="nav-item"><a class="nav-link" href="#!" id="ventas">Ventas</a></li>
                        <li class="pagRedireccion"  class="nav-item"><a class="nav-link" href="#!" id="objPerdidos">Objetos perdidos</a></li>
                        <li class="pagRedireccion"  class="nav-item"><a class="nav-link" href="#!" id="comunidad" >Comunidad P6</a></li>
                    </ul>
                </div>
            </div>
            <img  class="fotoUsuario" id="perfil" class="escudop6" id="vacio" src="../../Statics/media/logo.png" alt="UNAM" id="UNAM" width="80" height="80" >
    </nav>

    <header>
    <head>
        <!--Estos links contienen "codigo" que ayudan a aplicar el estilo, hacerlo responsivo y algunas animaciones de js, pero yo no use-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comunidad</title>
        <link rel="stylesheet" href="../../Statics/styles/pagPrincipales.css">
        <link rel="stylesheet" href="../../Statics/styles/navs.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <h1>Comunidad P6</h1>
        <br>
    <main>
        <aside id="clubes">
            <section class="encabezado">
                <article class="jDer">Filtrar por</article><!-- justificado Derercha-->
                <article class="titulos">Tus clubes</article>
            </section>
            <input class="mb-4" id="buscador" type="text" placeholder="Buscar...">
            <div class="mb-4" id="resultados"></div>
            <!-- lo demas de aqui se haria con la BD y JS-->
            <!-- class="server", esta clase estaba abajo pro la saque por que me estaba dando problemas con la responsividad-->
            <section class="btn btn-secondary" id="crear">Crear server</section>
        </aside>
        <section class="servidores" id="club" style="display: none;">
            <div class="container overflow-hidden" id="contServidores">
                <article class="portada" id="portada"></article>
                <article class="usuarioPortada" id="usuPortada"></article>
                <!-- lo demas de aqui se haria con la BD y JS-->
                <article class="server" class="btn btn-secondary" id="unirse">Unirme</article>
                <!-- JS cuando se de click eliminar este boton -->
                <article class="server" class="btn btn-secondary" id="salir">Salir</article>
                <!-- JS cuando se de click eliminar este boton -->
                <article class="datos" class="col-6" id="datos">
                    <div id="nombre"></div>
                    <div id="categoria"></div>
                </article>
            </div>
            <div class="container overflow-hidden">
                <article class="info">
                    <div class="cuadros" id="cuadro1">
                        <div id="descripcion"></div>
                    </div>
                    <div class="cuadros" id="cuadro2">
                        <div id="reglas"></div>
                    </div>
                </article>
            </div>
            <div class="container overflow-hidden">
                <article class="chat">
                    <div>Chat del servidor</div>
                    <div class="fulanitos"><!-- aparece al unirse, diseño, pero se implementara en js -->
                        <!-- BD -->
                        <div class="fotitos"></div>
                        <div class="amigo">Nombre</div>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <script src="../js/comunidad.js"></script>
    <!-- <script src="../js/navs.js"></script> -->
</body>

</html>
<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header('Location: ../../index.php');
    }
    /*Desarrollador: Eduardo Garduño 
    Proposito: Esta pagina es la vista principal de los servidores, en la cual tenemos un buscador y nos permitira buscar servidores por su
    nombre, en los cuales podremos conectarnos e interactuar con las demas personas, hablar sobre temas de interes y hacer buenos amigos, tambien
    al encontrar el servidor que queramos al seleccionar una opcion nos desplegara los datos del servidor y podremos unirnos o salirnos*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!--Estos links contienen "codigo" que ayudan a aplicar el estilo, hacerlo responsivo y algunas animaciones de js, pero yo no use-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidad P6</title>
    <link rel="stylesheet" href="../../Statics/styles/pagPrincipales.css">
    <link rel="stylesheet" href="../../Statics/styles/navs.css">
    <link rel="icon" href="../../Statics/media/logo.png" type="image/icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
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
                    <?php echo '<article class="fotoUsuario" id="perfil"><img src="'.$_SESSION["Foto_Perfil"].'"></article>'?>
                </div>
        </nav>
    <header>
        <h1>Comunidad P6</h1><br>
    </header>
    <main>
        <aside id="clubes">
            <section class="encabezado">
                <article class="jDer">Filtrar por</article>
                <article class="titulos">Tus clubes</article>
                <input class="mb-4" id="buscador" type="text" placeholder="Buscar...">
            </section>
            <section class="reServer">
                <div class="mb-4" id="resultados"></div>
            </section>
            <!-- class="server", esta clase estaba abajo pro la saque por que me estaba dando problemas con la responsividad-->
            <section class="btn btn-secondary" id="crear">Crear server</section>
        </aside>
        <section class="servidores" id="club" style="display: none;">
            <article class="portada" id="portada"></article>
                <article class="usuarioPortada" id="usuPortada"></article>
                <article class="server" class="btn btn-secondary" id="unirse">Unirme</article>
                <article class="server" class="btn btn-secondary" id="salir">Salir</article>
                <article class="datos" class="col-6" id="datos">
                    <div id="nombre"></div>
                    <div id="categoria"></div>
                </article>
            </article>
            <article class="info">
                <div class="cuadros" id="cuadro1">
                    <div id="descripcion"></div>
                </div>
                <div class="cuadros" id="cuadro2">
                    <div id="reglas"></div>
                </div>
            </article>
            <div class="container overflow-hidden">
                <article class="chat">
                    <div>Chat del servidor</div>
                    <div class="fulanitos">
                        <div class="fotitos"></div>
                        <div class="amigo">Nombre</div>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <script src="../js/comunidad.js"></script>
    <script src="../js/navs.js"></script>
</body>
</html>
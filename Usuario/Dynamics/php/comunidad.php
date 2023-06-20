<?php
    //si no hay sesion iniciada te regresa al index
    /*session_start();
    if(!isset($_SESSION["usuario"])){
        header('Location: ../../index.php');
    }*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidad</title>
    <link rel="stylesheet" href="../../Statics/styles/pagPrincipales.css">
    <link rel="stylesheet" href="../../Statics/styles/navs.css">
</head>
<body>
    <nav>
        <section class="img">
            <img src="../../Statics/media/EscudoP6.jpg" alt="ENP6" id="prepa6">
            <img src="../../Statics/media/EscudoUNAM.jpg" alt="UNAM" id="UNAM">
        </section>
        <section class="pags">
            <article class="pagRedireccion" id="pagPrincipal">Pagina principal</article>
            <article class="pagRedireccion" id="ventas">Ventas</article>
            <article class="pagRedireccion" id="objPerdidos">Objetos perdidos</article>
            <article class="fotoUsuario" id="perfil"><!--Foto de usuario BD--></article>
        </section>
    </nav>
    <header>
        <h1>Comunidad P6</h1>
    </header>
    <main>
        <aside id="clubes">
            <section class="encabezado">
                <article class="jDer">Filtrar por</article><!-- justificado Derercha-->
                <article class="titulos">Tus clubes</article>
            </section>
            <input type="text" placeholder="Buscar...">
            <!-- lo demas de aqui se haria con la BD y JS-->
            <section class="server" id="crear">Crear server</section>
        </aside>
        <section class="servidores">
            <article class="portada"></article>
            <article class="usuarioPortada"></article>
            <article class="server" id="unirse">Unirme</article><!-- JS cuando se de click eliminar este boton -->
            <article class="datos">
                <div>Nombre del servidor/club</div>
                <div>Fecha de creacion y creador</div>
                <div>Categoría</div>
            </article>
            <article class="info">
                <div class="cuadros">Descripción: <br></div>
                <div class="cuadros">Reglas: <br></div>
            </article>
            <article class="chat">
                <div>Chat del servidor</div>
                <div class="fulanitos"><!-- aparece al unirse, diseño, pero se implementara en js -->
                    <!-- BD -->
                    <div class="fotitos"></div>
                    <div class="amigo">Nombre</div>
                </div>
            </article>
        </section>
    </main>
    <script src="../js/chat.js"></script>
    <script src="../js/navs.js"></script>
</body>
</html>
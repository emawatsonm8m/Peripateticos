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
</head>
<body>
    <nav>
        <section class="img">
            <img src="../../Statics/media/EscudoP6.jpg" alt="ENP6" id="prepa6">
            <img src="../../Statics/media/EscudoUNAM.jpg" alt="UNAM" id="UNAM">
        </section>
        <section class="pags">
            <article class="pagRedireccion">Pagina principal</article>
            <article class="pagRedireccion">Ventas</article>
            <article class="pagRedireccion">Objetos perdidos</article>
            <article class="fotoUsuario"><!--Foto de usuario BD--></article>
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
            <!-- lo demas de aqui se haria con la BD -->
            <section class="server">Crear server</section>
        </aside>
        <section class="servidores">
            <article class="titulos">Servidores activos</article>
            <!-- BD -->
        </section>
        <aside id="chats">
            <section class="encabezado">
                <article class="titulos">Chat P6</article>
            </section>
            <input type="text" placeholder="Buscar...">
            <section>Nombre:</section>
            <!-- BD -->
        </aside>
    </main>
</body>
</html>
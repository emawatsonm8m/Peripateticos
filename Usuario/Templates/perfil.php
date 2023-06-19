<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Statics/styles/perfil.css">
    <title>Perfil</title>
</head>
<body>
<nav class="NavBar">
        <ul>
            <li><img src="../Statics/media/EscudoP6.png" id="P6" alt="Prepa_6">
            <img src="../Statics/media/EscudoUNAM.png" id="UNAM"alt="UNAM"></li>
            <li><a href="#" class="TextSelect">Ventas</a></li>
            <li><a href="#" class="TextSelect">Objetos perdidos</a></li>
            <li><a href="#" class="TextSelect">Comunidad P6</a></li>
            <li><a href="#"><img src="../Statics/media/PerfilVacio.png" id="FP" alt="FotoPerfil"></a></li>
        </ul>
    </nav>
    
    <div id="Perfil" class="DatosPerfil">
        <h2>Tu perfil</h2>
        <div>
            <img src="../Statics/media/PerfilVacio.png" alt="FotoPerfil" height="60" width="60">
        </div>
        <div>
            Usuario:
        </div>
        <div>
            Contraseña:
            <div>
                <!--para poner la imagen del ojo que abre y cierra-->
            </div>
        </div>
        <div>
            Nombre:
        </div>
        <div>
            Número de celular:
        </div>
        <div>
            Instagram:
        </div>
        <div>
            <button id="Perfil">Editar perfil</button>
        </div>
    </div>
    <section id="Publicaciones">
        <h2>Tus publicaciones</h2>
        <article id="comentario">
            <img src="../Statics/media/PerfilVacio.png" alt="FotoPerfil" height="20" width="20">
            <p>Mensaje</p><!--esta parte se conecta con la base de datos-->
            <div><button class="EditPublicacion"></button></div>
        </article>
    </section>
    <section id="Comunidad">
        <h2>Comunidad</h2>
        <article id="Publicacion">
            <div><button class="EditPublicacion"></button></div>
        </article>
    </section>
    <div id="Guardados">
        <h2 id="Guardado">Publicaciones Guardadas</h2>
        <div></div>
    </div>
    <script src="../Dynamics/js/PetiFetch.js"></script>
</body>
</html>
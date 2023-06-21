<?php
    session_start();
    // if(!isset($_SESSION["usuario"])){
    //     header('Location: ../../index.php');
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Statics/styles/perfil.css">
    <title>Perfil</title>
</head>
<body>
    <?php
    //  <nav class="NavBar">
    //         <ul>
    //             <li><img src="../Statics/media/EscudoP6.png" id="P6" alt="Prepa_6">
    //             <img src="../Statics/media/EscudoUNAM.png" id="UNAM"alt="UNAM"></li>
    //             <li><a href="#" class="TextSelect">Ventas</a></li>
    //             <li><a href="#" class="TextSelect">Objetos perdidos</a></li>
    //             <li><a href="#" class="TextSelect">Comunidad P6</a></li>
    //             <li><a href="#"><img src="../Statics/media/PerfilVacio.png" id="FP" alt="FotoPerfil"></a></li>
    //         </ul>
    //     </nav>
    echo '<main> 
        <div "container overflow-hidden text-center">
            <div class="row gy-5">
            <!-- Elimine esta clase class="DatosPerfil -->
            <section id="Perfil" >
            <h2>Tu perfil</h2>
            <div>
                <img src="'.$_SESSION["Foto_Perfil"].'" alt="FotoPerfil" class="img-fluid" class="fotito" id="fotitoPerfil" alt="FotoPerfil">
            </div>
            <div class="info" class="form-control" id="oculto">
                <input accept="image/*" type="file" name="arch" id="agregar">
            </div>
            <div class="info">
                Usuario: '.$_SESSION["usuario"].'
            </div>
            <div class="info" id="contraseña">
                Contraseña: ********
                <!--para poner la imagen del ojo que abre y cierra-->
            </div>
            <div class="info" id="nombre">
                <div>Nombre: </div>
                <div class="sesion">'.$_SESSION["Nombre"].'</div>
                <div >
                    <input class="hidden" id="nomOculto" type="text" name="nombre" maxlength="20" value="'.$_SESSION["Nombre"].'">
                </div>
            </div>
            <div class="info" id="celular">
                <div>Número de celular: </div>
                <div class="sesion">'.$_SESSION["Celular"].'</div>
                <div >
                    <input class="hidden" id="celOculto" type="text" name="celular" minlength="10" maxlength="10" value="'.$_SESSION["Celular"].'">
                </div>
            </div class="info"> 
            <div class="info" id="instagram">
                <div>Instagram: </div>
                <div class="sesion">'.$_SESSION["Instagram"].'</div>
                <div>
                    <input class="hidden" id="instOculto" type="text" name="instagram" value="'.$_SESSION["Instagram"].'">
                </div>
            </div>
            <div class="Botones">
                <button type="button" class="BotonPerfil" class="btn btn-secondary" id="Editar">Editar perfil</button>
                <button type="button" class="BotonPerfil" class="btn btn-secondary" id="listo">Listo</button>
                <button type="button" class="BotonPerfil" class="btn btn-secondary" id="Salir">Cerrar Sesión</button>
            </div>
        </section>
        <!-- <section class="Derecha">
            <article id="Publicaciones">
                <h2>Tus public∫aciones</h2>
                <div id="comentario">
                    <img src="../Statics/media/PerfilVacio.png" alt="FotoPerfil" height="20" width="20">
                    <p>Mensaje   pesta parte se conecta con la base de datos
                    <div><button class="EditPublicacion"></button></div>
                </div>
            </article>
            <article id="Comunidad">
                <h2>Comunidad</h2>
                <div id="Publicacion">
                    
                    <button class="EditPublicacion"></button>
                </div>
            </article>
        </section>-->
    </div>
    </div>
    </main>
    <script src="../js/Perfil.js"></script>';
?>
</body>
</html>
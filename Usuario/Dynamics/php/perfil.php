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
    <link rel="stylesheet" href="../../Statics/styles/navs.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Perfil</title>
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
</head>
<body>
<?php
    echo '
    <main> 
    
       <div "container overflow-hidden text-center">
            <div class="row gy-5">
                <section id="Perfil">
                    <h1>Tu perfil</h1>
                    <div>
                        <img src="'.$_SESSION["Foto_Perfil"].'" alt="FotoPerfil" class="fotito" class="img-fluid" id="fotitoPerfil">
                    </div>
                    <div class="info" class="form-control" id="oculto">
                        <input accept="image/*" type="file" name="arch" id="agregar">
                    </div>
                    <div class="info">
                        Usuario: '.$_SESSION["usuario"].'
                    </div>
                    <div class="info" id="contraseña">
                        Contraseña: ********
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
                        <div>
                            <input class="hidden" id="celOculto" type="text" name="celular" minlength="10" maxlength="10" value="'.$_SESSION["Celular"].'">
                        </div>
                    </div> 
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
            </div>
        </div>
    </main>
    <script src="../js/Perfil.js"></script>';
?>
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
</body>
</html>
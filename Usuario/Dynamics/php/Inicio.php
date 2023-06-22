<?php
    // Si no existe sesion, te regresa al iniciar sesion
    session_start();
    if(!isset($_SESSION["usuario"])){
        header('Location: ../../index.php');
    }

    require "./config.php";
    $conexion = connect ();
    if(!$conexion){
        echo "No se pudo conectar con la base de datos";
    }else{
       $sql = "SELECT * FROM usuario WHERE Cuenta = ".$_SESSION['usuario'];
        $res = mysqli_query($conexion, $sql);
        while($respuesta = mysqli_fetch_assoc($res)){
            $ID_Usuario = $respuesta['ID_Usuario'];
            $nombre = $respuesta['Nombre'];
            $fotoPerfil = $respuesta['Foto_Perfil'];
            $instagram = $respuesta['Instagram'];
            $celular = $respuesta ['Celular'];
        }
        $_SESSION["ID_Usuario"] = $ID_Usuario;
        $_SESSION["Nombre"] = $nombre;
        $_SESSION["Foto_Perfil"] = $fotoPerfil;
        $_SESSION["Instagram"] = $instagram;
        $_SESSION["Celular"] = $celular;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Coyote</title>
    <link rel="stylesheet" href="../../Statics/styles/Inicio.css">
    <link rel="icon" href="../../Statics/media/logo.png" type="image/icon">

    <!--Scripts css-->
    <link rel="stylesheet" href="../../libs/bootstrap-5.3.0-dist (1)/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../libs/css/cdn.datatables.net_v_dt_dt-1.13.4_datatables.min.css">
    <link rel="stylesheet" href="../../Statics/styles/navs.css">
    <!--Scripts js-->
    <script src="../../libs/fullcalendar-6.1.8/dist/index.global.min.js"></script>
    <script src="../../libs/js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="../../libs/js/unpkg.com_@popperjs_core@2.11.8_dist_umd_popper.min.js"></script>
    <script src="../../libs/bootstrap-5.3.0-dist (1)/bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
    <script src="../../libs/js/cdn.datatables.net_v_dt_dt-1.13.4_datatables.min.js"></script>
    <script src="../../libs/js/momentjs.com_downloads_moment-with-locales.min.js"></script>
    <script src="../../libs/bootstrap-5.3.0-dist (1)/bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
    <script src="../../libs/cdn.datatables.net_v_dt_dt-1.13.4_datatables.min.js"></script>
    <script src="../js/navs.js"></script>
    
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
                    <article class="fotoUsuario" id="perfil"><!--Foto de usuario BD--></article>
                </div>
    </nav>

    <header>
        <h1>Red Coyote</h1>
    </header>

    <main>
        <div class="CARRUSEL">
        <div class="carrusel">
            <div class="elemento">
                <img src="https://th.bing.com/th/id/R.a7c37c1ea0a936c346d450f3ea5ca2b7?rik=Jdm4bEI3ITuaBA&pid=ImgRaw&r=0">
            </div>

            <div class="elemento">
                <img src="https://img.buzzfeed.com/buzzfeed-static/static/2016-10/31/12/asset/buzzfeed-prod-web04/sub-buzz-21367-1477932437-5.png">
            </div>

            <div class="elemento">
                <img src="https://th.bing.com/th/id/R.ed03b06480200f6666a3c858b2a4771f?rik=WAszUHdwWh8DkQ&pid=ImgRaw&r=0">
            </div>

            <div class="elemento">
                <img src="https://www.dgcs.unam.mx/boletin/bdboletin/multimedia/WAV180209/085bis(1).jpg">
            </div>

            <div class="elemento">
                <img src="https://noticieros.televisa.com/wp-content/uploads/2019/04/encapuchados-toman-a-prepa-6-redes-sociales-1.png">
            </div>

            <div class="elemento">
                <img src="https://th.bing.com/th/id/OIP.jUU0aQgUi5-FD3sJD7mc4gHaEj?pid=ImgDet&rs=1">
            </div>

            <div class="elemento">
                <img src="https://th.bing.com/th/id/OIP.JSfjPiJ8_IdRObOQHrEm1gHaHa?pid=ImgDet&rs=1">
            </div>

            <div class="elemento">
                <img src="https://i.ytimg.com/vi/BO99zfX0RCw/hqdefault.jpg">
            </div>

            <div class="elemento">
                <img src="https://th.bing.com/th/id/R.6aeb9ef808a6a7c38b3a568efe305b1c?rik=r5NW64oHqrK4iA&riu=http%3a%2f%2fenp.unam.mx%2fimages%2fenp%2fplanteles%2fp6%2fP6-10.jpg&ehk=Gkx7t44rtL13C2hgFTE9%2fKg6oqLXezOIPgsXjJtSR4c%3d&risl=&pid=ImgRaw&r=0">
            </div>

            <div class="elemento">
                <img src="https://th.bing.com/th/id/R.13c1d46fe68107f0c2b1011209bb3dfa?rik=5Cfk1m0OwvBlOQ&pid=ImgRaw&r=0">
            </div>

            <div class="elemento">
                <img src="https://th.bing.com/th/id/R.bca31c81b628644dd7a4428cce6bf896?rik=lFGuW%2blKG4Xv5A&riu=http%3a%2f%2fcdmx.com%2fwp-content%2fuploads%2f2020%2f02%2fprepa-de-la-unam-especial.jpeg&ehk=K4MGwdAXNwYvpXrM8e62Tnx79ZFfXKLbY4ZS0MtxT8s%3d&risl=&pid=ImgRaw&r=0">
            </div>

            <div class="elemento">
                <img src="https://th.bing.com/th/id/OIP.oZlk5vhfecQRiuxy-fu9PQHaEL?pid=ImgDet&rs=1">
            </div>
        </div>
        </div>
            <h2>Nuestra misión</h2>
        <aside>
            <p>El prósito de esta nueva red es vincular a la comunidad ENP6 de la UNAM, tratando de mejorar la experiencia de navegación para cada usuario, y manteniéndo a la comunidad informada tanto de loe eventos formales y no formales que se llevan a cabo, queremos fomentar la inclusión y participación de los alumnos, en ayuda a la misma comunidad, y darle una mayor visibilidad a diferentes tipos de grupos estudiantiles que existen en la prepa que pueden ser de interés, pero que no tenían tanta difusión, con esto te damos la bienvenida a esta hermosa Red Coyote.</p>
        </aside>
        <br>
        <div id="calendario" style=" height:50%; width:50%; margin:auto;">

            <script>
                let calendario = new FullCalendar.Calendar(document.getElementById('calendario'),{
                    events: 'calendarioEventos.php?accion=obtener'
                });

                calendario.render();

            </script>

        </div>
    </main>
</body>
</html>
<?php
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
    <!--Scripts js-->
    <script src="../../libs/fullcalendar-6.1.8/dist/index.global.min.js"></script>
    <script src="../../libs/bootstrap-5.3.0-dist (1)/bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
    <script src="../../libs/cdn.datatables.net_v_dt_dt-1.13.4_datatables.min.js"></script>
    
</head>
<body>
    <nav>
        <section class="img">
            <img src="../../Statics/media/EscudoP6.jpg" alt="ENP6" id="prepa6">
        </section>
        <section class="pags">
            <article class="pagRedireccion"><button class="boton" >Ventas</button></article>
            <article class="pagRedireccion"><button class="boton" >Objetos perdidos</button></article>
            <article class="pagRedireccion"><a href="./comunidad.php">Foro</a></button></article>
            <article class="fotoUsuario"><img></article> <!--hacer alguna variable para que se guarde la imágen que suba el ususario en el form-->
        </section>
    </nav>
    <header>
        <h1>Red Coyote</h1>
    </header>

    <main>
        <div class="CARRUSEL">
        <div class="carrusel">
            <div class="elemento">
                <img src="../../Statics/media/carrusel/uno.jpg"><!--Insertar imagen-->
            </div>

            <div class="elemento">
                <img><!--Insertar imagen-->
            </div>

            <div class="elemento">
                <img><!--Insertar imagen-->
            </div>

            <div class="elemento">
                <img><!--Insertar imagen-->
            </div>

            <div class="elemento">
                <img><!--Insertar imagen-->
            </div>

            <div class="elemento">
                <img><!--Insertar imagen-->
            </div>

            <div class="elemento">
                <img><!--Insertar imagen-->
            </div>

            <div class="elemento">
                <img><!--Insertar imagen-->
            </div>

            <div class="elemento">
                <img><!--Insertar imagen-->
            </div>

            <div class="elemento">
                <img><!--Insertar imagen-->
            </div>

            <div class="elemento">
                <img><!--Insertar imagen-->
            </div>

            <div class="elemento">
                <img><!--Insertar imagen-->
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
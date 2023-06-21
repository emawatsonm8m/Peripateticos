<!DOCTYPE html>
<html>
    <head>
        <title>TUS PRODUCTOS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
            <img  class="escudop6" id="vacio"src="../../statics/media/EscudoP6.jpg" alt="dos" width="80" height="80" >
            <img  class="unamescudo" id="vacio"src="../../statics/media/EscudoUNAM.jpg" alt="dos" width="80" height="80" >
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Página principal</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Ventas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Objetos perdidos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Comunidad P6</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">  
                       <article>
                        <header class="mb-4">
                            <!-- Este es la barrita de buscador ( no se si dejarlo o quitarlo) -->
                            <input class="form-control" type="text" placeholder="Buscar..." aria-label="Buscar..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Ir!</button>
                            <h1 class="fw-bolder mb-1">TUS PRODUCTOS</h1>
                        </header>
                        <!-- Aqui estan los productos -->
                        <div class="container overflow-hidden text-center">
                        <div class="row gy-5">
                            <div class="col-6">
                            <div class="p-3">
                                <img src="../../statics/media/dos.jpg" class="img-fluid" alt="imagen1">
                                <p>descripcion del producto</p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Editar </button>
                                    <button type="button" class="btn btn-secondary">Eliminar</button>
                                </div>
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="p-3">
                                <img src="../../statics/media/dos.jpg" class="img-fluid" alt="imagen2">
                                <p>descripcion del producto</p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Editar </button>
                                    <button type="button" class="btn btn-secondary">Eliminar</button>
                                </div>
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="p-3">
                                <img src="../../statics/media/dos.jpg" class="img-fluid" alt="imagen3">
                                <p>descripcion del producto</p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Editar </button>
                                    <button type="button" class="btn btn-secondary">Eliminar</button>
                                </div>
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="p-3">
                                <img src="../../statics/media/dos.jpg" class="img-fluid" alt="imagen4">
                                <p>descripcion del producto</p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Editar </button>
                                    <button type="button" class="btn btn-secondary">Eliminar</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- Post content-->
                        
                    </article>
                </div>
                <!-- Este div corresponde a los puntos de venta y horarios s-->
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header">Puntos de venta</div>
                        <div class="card-body">
                            <div class="input-group">
                                <img src="../../statics/media/mapaprepa.jpg" class="img-fluid" alt="imagenprepa">
                            </div>
                             <!-- Esto imprimia lo de los puntos de ventas pero lo voy a acutalizar para sacarlos de la base de datos -->
                            <?php
                            echo$_POST["l1"],"<br>";
                            echo$_POST["l2"],"<br>";
                            echo$_POST["l3"],"<br>";
                            echo$_POST["l4"],"<br>";
                            echo$_POST["l5"],"<br>";
                            ?>
                            <div class="botonpp"><a href="./subirproducto.php"><input type="button" class="btn btn-primary" value="Actualizar"></a><div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">Estadisticas</div>
                        <div class="card-body">
                            <div class="input-group">
                                <img src="../../statics/media/dos.jpg" class="img-fluid" alt="imagen1">
                                <p>Likes:</p><br><br>
                                <p>Diskes:</p><br><br>
                                <p>Guardado:</p><br><br>
                            </div>
                            <button type="button" class="btn btn-primary">Administrar</button> <button type="button" class="btn btn-primary">Nuevo</button>
                        </div>
                    </div>
                    <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Aqui seria como van a publicar el comentario (la vista)-->
                                <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Deja un comentario ..."></textarea></form>
                                <!-- Comentarios -->
                                <div class="d-flex mb-4">
                                    <!--cometario 1 -->
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Usuario</div>
                                        ñam añm ñam 
                                        <!-- comentario 1 ( se ve como una respuesta)-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Usuario</div>
                                               aca hay otro comentario q responde al ñam ñam ñam 
                                            </div>
                                        </div>
                                        <!-- comentario 2 ( se ve como una respuesta)-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Usuario</div>
                                               aqui hay un comentario 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- otro comentario -->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Usuario</div>
                                        chilaquiles rojos superiores 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>
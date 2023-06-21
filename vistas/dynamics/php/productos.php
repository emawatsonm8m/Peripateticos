<html>
    <head>
        <!--Estos links contienen "codigo" que ayudan a aplicar el estilo, hacerlo responsivo y algunas animaciones de js, pero yo no use-->
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
</body>
</html>
<?php
        require "../../Usuario/Dynamics/php/config.php";
        $conexion= connect();
        if (!$conexion){
            echo "no se conceto con la base";
        }
        else{
            $sql="SELECT NombreProducto, Foto FROM producto  WHERE ID_PRODUCTO=14;"; //ASIGNAR ID_PRODUCTO con la vista de productos
            $res = mysqli_query($conexion, $sql);
            $respuesta = mysqli_fetch_assoc($res);
            $nombre = $respuesta["NombreProducto"];
            $foto = $respuesta["Foto"];
            $producto = "$foto";
            //la mayor parte del codigo aun no es funcional pero es por que lo tengo en otro lado desorganizado, alarato lo actulizo para que funcione 
           //no vallan a cambiar las calses por que eso es lo que hace que sea responsivos
        echo'<div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Barrita de busqueda-->
                            <input class="form-control" type="text" placeholder="Buscar..." aria-label="Buscar..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Ir!</button>
                            <h1 class="fw-bolder mb-1">Ventas</h1>
                        </header>
                        <!-- ESte div contiene los productos-->
                        <div class="container overflow-hidden text-center">
                        <div class="row gy-5">
                            <div class="col-6">
                            <div class="p-3">
                                
                                <img src=',"$producto",' class="img-fluid" alt="producto1">
                                <p>';echo $nombre;
                                echo'</p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Reportar </button>
                                    <button type="button" class="btn btn-secondary">Guardar</button>
                                    <button type="button" class="btn btn-secondary">Copiar link</button>
                                </div>
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="p-3">
                                <img src="../../statics/media/dos.jpg" class="img-fluid" alt="imagen2">
                                <p>descripcion del producto</p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Reportar </button>
                                    <button type="button" class="btn btn-secondary">Guardar</button>
                                    <button type="button" class="btn btn-secondary">Copiar link</button>
                                </div>
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="p-3">
                                <img src="../../statics/media/dos.jpg" class="img-fluid" alt="imagen3">
                                <p>descripcion del producto</p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Reportar </button>
                                    <button type="button" class="btn btn-secondary">Guardar</button>
                                    <button type="button" class="btn btn-secondary">Copiar link</button>
                                </div>
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="p-3">
                                <img src="../../statics/media/dos.jpg" class="img-fluid" alt="imagen4">
                                <p>descripcion del producto</p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">Reportar </button>
                                    <button type="button" class="btn btn-secondary">Guardar</button>
                                    <button type="button" class="btn btn-secondary">Copiar link</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!--Este es el apartado de tus productos con este accedes a ellos (pero aun no sirve )-->
                        
                    </article>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Tus productos</div>
                        <div class="card-body">
                            <div class="input-group">
                                <img src="../../statics/media/dos.jpg" class="img-fluid" alt="imagen1">
                                <p>Descripción del producto</p>
                            </div>
                            <button type="button" class="btn btn-primary">Administrar</button> <button type="button" class="btn btn-primary">Nuevo</button>
                        </div>
                    </div>
                    <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Estas son vistas de lo que deveria ser el foro ->
                                <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>
                                <!-- Comment with nested comments-->
                                <div class="d-flex mb-4">
                                    <!-- Parent comment-->
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">usuario</div>
                                      escribe un comentario
                                        <!--  commentario 1-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">usuario</div>
                                                otro comentario (respuesta)
                                            </div>
                                        </div>
                                        <!-- commentario2-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Cusuario</div>
                                                When you put money directly to a problem, it makes a good headline.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- comentario 3 -->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">usuario</div>
                                        stray kids worl domination 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>';
        }
?>
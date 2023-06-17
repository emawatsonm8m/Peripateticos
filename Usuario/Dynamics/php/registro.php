<?php
    // Si hay una sesion iniciada me redirige a ...
    /*session_start();
    if(isset($_SESSION["usuario"])){
        header('Location: ./...');
    }*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../../Statics/styles/forms.css">
</head>
<body>
    <header>
        <img src="../../Statics/media/EscudoP6.jpg" alt="ENP6" id="prepa6">
        <img src="../../Statics/media/EscudoUNAM.jpg" alt="UNAM" id="UNAM">
    </header>
    <main>
        <form action="./usuarioDB.php" method="post">
            <h1>Crear cuenta</h1>
            <article class="input">
                <input type="tel" name="user" minlength="9" maxlength="9" placeholder="                 No. de cuenta" required/>
                <label for="user">
                    <p class="campo">Usuario:</p>
                </label>
            </article>
            <article class="input">
                <input type="password" name="contraseña" minlength="8" placeholder="                      dd/mm/aaaa" required/>
                <label for="contraseña">
                    <p class="campo">Contraseña:</p>
                </label>
            </article>
            <article class="input">
                <input type="text" name="nombre" maxlength="20" required/>
                <label for="nombre">
                    <p class="campo">Nombre:</p>
                </label>
            </article>
            <article class="input">
                <input type="tel" name="celular" minlength="10" maxlength="10" required/>
                <label for="celular">
                    <p class="campo">Celular:</p>
                </label>
            </article>
            <article class="input">
                <input type="text" name="instagram" maxlength="20" placeholder="                    @sigueme ;)" required/>
                <label for="instagram">
                    <p class="campo">Instagram:</p>
                </label>
            </article>
            <article class="text">Usa fecha de nacimiento como contraseña</article>
            <button type="submit">Crear cuenta</button>
            <article class="text" id="cambio">Si ya tienes una cuenta, <a href="../../index.php">inicia sesion.</a></article>
        </form>
    </main>    
</body>
</html>
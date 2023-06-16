<?php
    // Si hay una sesion iniciada me redirige a ....
    /*session_start();
    if(isset($_SESSION["usuario"])){
        header('Location: ./Dynamics/php/...');
    }*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="./Statics/styles/forms.css">
</head>
<body>
    <header>
        <img src="./Statics/media/EscudoP6.jpg" alt="ENP6" id="prepa6">
        <img src="./Statics/media/EscudoUNAM.jpg" alt="UNAM" id="UNAM">
    </header>
    <main>
        <form action="./Dynamics/php/verifica.php" method="post">
            <h1>Iniciar Sesión</h1>
            <article class="input">
                <input type="tel" name="usuario" minlength="9" maxlength="9" placeholder="                 No. de cuenta" required/><!-- Espacio en placeholder es para que se vea bien -->
                <label for="usuario">
                    <p class="campo">Usuario:</p>
                </label>
            </article>
            <article class="input">
                <input type="password" name="contraseña" minlength="8" placeholder="                      dd/mm/aaaa" required/>
                <label for="contraseña">
                    <p class="campo">Contraseña:</p>
                </label>
            </article>
            <article class="text">Tu contraseña es tu fecha de nacimiento.</article>
            <button type="submit">Iniciar sesion</button>
            <article class="text" id="cambio">Si no tienes una cuenta, <a href="./Dynamics/php/registro.php">crea una.</a></article>
        </form>
    </main>    
</body>
</html>
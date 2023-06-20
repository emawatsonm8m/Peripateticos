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
            <h1>Iniciar Sesion</h1>
            <label for="usuario" class="input">Usuario
                <input type="text" name="usuario" placeholder="No. de cuenta" required/>
            </label>
            <label for="contraseña" class="input">Contraseña: 
                <input type="password" name="contraseña" placeholder="dd/mm/aaaa" requiered/>
            </label>
            <p class="text">Tu contraseña es tu fecha de nacimiento.</p>
            <button type="submit">Iniciar sesion</button>
            <p class="text">Si no tienes una cuenta, <a href="./Dynamics/php/registro.php">crea una.</a></p>
        </form>
    </main>    
</body>
</html>
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
    <title>Registro</title>
    <link rel="stylesheet" href="../../Statics/styles/forms.css">
</head>
<body>
    <header>
        <img src="../../Statics/media/EscudoP6.jpg" alt="ENP6" id="prepa6">
        <img src="../../Statics/media/EscudoUNAM.jpg" alt="UNAM" id="UNAM">
    </header>
    <main>
        <section class="forms">
            <form action="../../index.php" method="post">
                <h1>Crear cuenta</h1>
                <label for="usuario" class="input">Usuario: 
                    <input type="text" name="usuario" placeholder="No. de cuenta"/>
                </label>
                <label for="contraseña" class="input">Contraseña: 
                    <input type="password" name="contraseña" placeholder="dd/mm/aaaa"/>
                </label>
                <label for="usuario" class="input">Nombre: 
                    <input type="text" name="nombre"/>
                </label>
                <label for="usuario" class="input">Género:
                    <select name="genero" id="genero">
                        <option value="femenino">Femenino</option>
                        <option value="masculino">Masculino</option>
                        <option value="otro">No especificar</option>
                    </select>
                </label>
                <label for="usuario" class="input">Pronombres: 
                    <input type="text" name="pronombre"/>
                </label>
                <p class="text">Usa fecha de nacimiento como contraseña</p>
                <button type="submit">Crear cuenta</button>
                <p class="text">Si ya tienes una cuenta, <a href="../../index.php">inicia sesion.</a></p>
            </form>
        </section>
    </main>    
</body>
</html>
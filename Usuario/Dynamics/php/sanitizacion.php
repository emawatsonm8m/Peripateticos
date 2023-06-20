<?php
    function sanitizarCadenaSQL($cadena){
        $cadenaSanitizada = filter_var($cadena,FILTER_SANITIZE_STRING);
        return $cadenaSanitizada;
    }

    function sanitizarNumSQL($num){
        $numSanitizado = filter_var($num,FILTER_SANITIZE_NUMBER_INT);
        return $numSanitizado;
    }

    function sanitizarEmailSQL($email){
        $emailSanitizado = filter_var($email,FILTER_SANITIZE_EMAIL);
        return $emailSanitizado;
    }

    function sanitizarCadenaHTML($cadena){
        $cadenaSanitizada = htmlspecialchars($cadena);
        return ($cadenaSanitizada);
    }

    function select($tabla , $valor, $columa, $columnas){
        $peticion = mysqli_prepare("SELECT $columnas FROM $tabla WHERE $columa = ?");
        mysqli_stmt_bind_param ($peticion, "s", $valor);
        // mysqli_stmt_execute ($peticion);
        $respuesta = $mysqli_fetch_assoc($mysqli_stmt_execute ($peticion));
    }
?>
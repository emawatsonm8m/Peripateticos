<?php
    function hashearContra ($contra){
        $contraseñaHasheada = hash("SHA256", $contra);
        return $contraseñaHasheada;
    }
    function verificarContra($contraseña, $correcta, $sal){    //contraseña es lo que manda el usuario  //correcta y sal se saca de base de datos
        $coincide = false;
        $caracteres = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz");
        for($i=0; $i<count($caracteres); $i++){
            for($j=0; $j<count($caracteres); $j++){
                $pimienta = $caracteres[$i].$caracteres[$j];
                $contra = $contraseña.$pimienta.$sal;
                if(hashearContra($contra) == $correcta){
                    $coincide = true;
                    break;
                }
            }
        }
        return true;
    }
    function generarSal(){
        $sal = uniquid();
        return $sal;
    }
    function generarPimienta(){
        $caracteres = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz");
        $partesPimienta = array_rand($caracteres, 2);
        $p1 = $caracteres($partesPimienta[0]);
        $p2 = $caracteres($partesPimienta[1]);
        $pimienta = $p1.$p2;
        return $pimienta;
    }
?>
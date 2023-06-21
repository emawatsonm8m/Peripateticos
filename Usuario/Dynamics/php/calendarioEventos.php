<?php
header('Content-Type: application/json'); //me devuelve la información en formato json

require("calendarioConexion.php");//para hacer mi conexión con la base de datos

$conexion = connect();

switch ($_GET['accion']) {

case 'agregar':
    $consulta = "INSERT INTO Eventos (NombreEvento, INICIO, FIN) VALUES ('$_POST[NombreEvento]', '$_POST[INICIO]', '$_POST[FIN]')";
    mysqli_query($conexion, $consulta);
    break;

case 'borrar':
        $consulta = "DELETE FROM Eventos WHERE id = $_POST[id]";
        mysqli_query($conexion, $consulta);
        break;

    case 'obtener':
        $consulta = "SELECT * FROM Eventos";
        $result = mysqli_query($conexion, $consulta);

        $eventos = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $evento = array(
                'title' => $row['NombreEvento'],
                'start' => $row['INICIO'],
                'end' => $row['FIN']
            );

            $eventos[] = $evento;
        }

        echo json_encode($eventos);
        break;
        
}

?>
<?php
    session_start();
    echo json_encode($_SESSION["ID_Usuario"]);
?>
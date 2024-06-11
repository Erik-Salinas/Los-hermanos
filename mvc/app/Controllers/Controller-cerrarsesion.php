<?php

session_start();

if (!empty($_POST["cerrar"])) {
    session_unset(); // Elimina todas las variables de sesión
    session_destroy(); // Destruye la sesión
    echo "Sesión cerrada, redirigiendo...";
    header("Location: ../../front-end/index.php"); // Redirige a index.php
    exit();
}else{
    echo "Error: Sesión cerrada, redirigiendo...";
}
?>
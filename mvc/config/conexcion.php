<?php
//*Conexión
$conexion = mysqli_connect("localhost", "root", "", "loshermanos") or
die("Problemas con la conexión");
$conexion->set_charset("utf8");//Intepretación de caracteres especiales
?>
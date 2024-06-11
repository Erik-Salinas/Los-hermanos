<?php
include '../../config/conexcion.php';

// Verificar la conexión
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

// Leer los datos del carrito enviados desde JavaScript
$data = json_decode(file_get_contents('php://input'), true);

// Procesar los datos del carrito y guardarlos en la base de datos
foreach ($data as $item) {
    $productName = $conexion->real_escape_string($item['tipo']);
    $productprecio = $conexion->real_escape_string($item['precio']);
    $sql = "INSERT INTO pedido (tipo, total) VALUES ('$productName', '$productprecio')";
    if ($conexion->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}

// Cerrar la conexión
$conexion->close();

echo "Compra realizada con éxito!";
?>
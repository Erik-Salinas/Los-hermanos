<?php
include '../../config/conexcion.php';

// Verificar la conexión
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

// Leer los datos del carrito enviados desde JavaScript
$data = json_decode(file_get_contents('php://input'), true);


// 2. Insertar los productos asociados al pedido
foreach ($data['productos'] as $producto) {
    $tipo = $conexion->real_escape_string($producto['tipo']);
    $tam = $conexion->real_escape_string($producto['tam']);
    $cantidad = $conexion->real_escape_string($producto['cantidad']);
}
$productosTam = '';
$productosNombres = '';
$total = 0;
foreach ($data['productos'] as $producto) {
    $total += $producto['precio'] * $producto['cantidad'];
    $productosNombres .= $producto['tipo'] . ', ';
    $productosTam .= $producto['tam'] . ', ';
}
$productosTam = rtrim($productosTam, ', ');
$productosNombres = rtrim($productosNombres, ', ');

$sqlProducto = "INSERT INTO pedido ( tipo, tamaño, cantidad,total) 
                    VALUES ( '$productosNombres', '$productosTam', '$cantidad','$total')";
 if ($conexion->query($sqlProducto) === FALSE) {
    echo "Error al insertar el producto: " . $conexion->error;
    exit;
}
// Cerrar la conexión
$conexion->close();

echo "Compra realizada con éxito!";
?>

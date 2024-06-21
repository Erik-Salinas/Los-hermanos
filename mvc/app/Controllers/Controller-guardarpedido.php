<?php
/* include '../../config/conexcion.php';
session_start();
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
$nombreUsuario = $_SESSION['user'];

$productosTam = '';
$productosNombres = '';
$prductosCant = '';
$total = 0;
foreach ($data['productos'] as $producto) {
    $total += $producto['precio'] * $producto['cantidad'];
    $productosNombres .= $producto['tipo'] . ', ';
    $productosTam .= $producto['tam'] . ', ';
    $prductosCant .= $producto['cantidad'] . ', ';

    $sql = $conexion->query("UPDATE menu SET stock = stock - $prductosCant  WHERE tipo='$productosNombres' AND tamaño='$productosTam'");
}
$productosTam = rtrim($productosTam, ', ');
$productosNombres = rtrim($productosNombres, ', ');
$prductosCant = rtrim($prductosCant, ', ');

$sqlProducto = "INSERT INTO pedido ( tipo, tamaño, cantidad, total, nombre_cliente) VALUES ( '$productosNombres', '$productosTam', '$prductosCant','$total','$nombreUsuario')";
 if ($conexion->query($sqlProducto) === FALSE) {
    echo "Error al insertar el producto: " . $conexion->error;
    exit;
}


// Cerrar la conexión
$conexion->close();

echo "Compra realizada con éxito!"; */



include '../../config/conexcion.php';
session_start();

// Verificar la conexión
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

// Leer los datos del carrito enviados desde JavaScript
$data = json_decode(file_get_contents('php://input'), true);

$productosTam = '';
$productosNombres = '';
$prductosCant = '';
$nombreUsuario = $_SESSION['user'];
$total = 0;

// 1. Iterar sobre cada producto y actualizar el stock
foreach ($data['productos'] as $producto) {
    // Obtener variables para el producto actual
    $tipo = $conexion->real_escape_string($producto['tipo']);
    $tam = $conexion->real_escape_string($producto['tam']);
    $cantidad = $conexion->real_escape_string($producto['cantidad']);

    // Actualizar el stock del producto en la tabla 'menu'
    $sqlUpdate = "UPDATE menu SET stock = stock - $cantidad WHERE tipo = '$tipo' AND tamaño = '$tam'";
    if ($conexion->query($sqlUpdate) === FALSE) {
        echo "Error al actualizar el stock: " . $conexion->error;
        exit;
    }

    // Calcular el total de la compra
    $total += $producto['precio'] * $cantidad;
}

// 2. Unifica cada producto pedido si son +1 dentro de un solo registro en pedido
foreach ($data['productos'] as $producto) {
    $productosNombres .= $producto['tipo'] . ', ';
    $productosTam .= $producto['tam'] . ', ';
    $prductosCant .= $producto['cantidad'] . ', ';
    
}
$productosTam = rtrim(trim($productosTam), ',');
$productosNombres = rtrim(trim($productosNombres), ',');
$prductosCant = rtrim(trim($prductosCant), ',');


$sqlProducto = "INSERT INTO pedido (tipo, tamaño, cantidad, total, nombre_cliente) VALUES ('$productosNombres','$productosTam','$prductosCant',$total,'$nombreUsuario')";

if ($conexion->query($sqlProducto) === FALSE) {
    echo "Error al insertar el pedido: " . $conexion->error;
    exit;
}

// Cerrar la conexión
$conexion->close();

echo "Compra realizada con éxito!";


?>
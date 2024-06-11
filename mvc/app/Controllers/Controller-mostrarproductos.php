<?php
// get_products.php
header('Content-Type: application/json');

// Configuración de la base de datos
include '../../config/conexcion.php';

// Verificar la conexión
if ($conexion->connect_error) {
    http_response_code(500);
    echo json_encode(array("error" => "Connection failed: " . $conexion->connect_error));
    exit();
}

// Consultar productos
$sql = "SELECT tipo, precio,img,tamaño FROM menu";
$result = $conexion->query($sql);

if ($result === false) {
    http_response_code(500);
    echo json_encode(array("error" => "Error in query: " . $conexion->error));
    $conexion->close();
    exit();
}

$products = array();
if ($result->num_rows > 0) {
    // Obtener los datos de cada fila
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Cerrar la conexión
$conexion->close();

// Devolver los productos en formato JSON
echo json_encode($products, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>



<?php
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

$query = "SELECT tel FROM registro_usuario WHERE user_registration = '" . $nombreUsuario . "'";
$result = mysqli_query($conexion, $query);

if ($result) {
    // Si la consulta se ejecutó correctamente
    $row = mysqli_fetch_assoc($result);  // Obtener la fila como un array asociativo
    if ($row) {
        // Si se encontró un resultado, $row['tel'] contendrá el número de teléfono como string
        $telefonoUsuario = $row['tel'];
        // Convertir a número (si es necesario)
        $telefonoNumero = (int) $telefonoUsuario;
    }
} else {
    // Si hubo un error en la consulta
    echo "Error en la consulta: " . mysqli_error($conexion);
}

$query = "SELECT dire FROM registro_usuario WHERE user_registration = '" . $nombreUsuario . "'";
$result = mysqli_query($conexion, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);  // Obtener la fila como un array asociativo
    if ($row) {
        $direccionUsuario = $row['dire'];
    }
} else {
    // Si hubo un error en la consulta
    echo "Error en la consulta: " . mysqli_error($conexion);
}

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

// 2. Unificar cada producto pedido si son +1 dentro de un solo registro en pedido
foreach ($data['productos'] as $producto) {
    $productosNombres .= $producto['tipo'] . ', ';
    $productosTam .= $producto['tam'] . ', ';
    $prductosCant .= $producto['cantidad'] . ', ';
}

$productosTam = rtrim(trim($productosTam), ',');
$productosNombres = rtrim(trim($productosNombres), ',');
$prductosCant = rtrim(trim($prductosCant), ',');

// Insertar el pedido en la tabla 'pedido'
$sqlProducto = "INSERT INTO pedido (tipo, tamaño, cantidad, dire, tel, total, nombre_cliente) VALUES ('$productosNombres', '$productosTam', '$prductosCant', '$direccionUsuario', '$telefonoNumero', $total, '$nombreUsuario')";

if ($conexion->query($sqlProducto) === FALSE) {
    echo "Error al insertar el pedido: " . $conexion->error;
    exit;
}

// Obtener el ID del último pedido insertado
$id_pedido = $conexion->insert_id;

// Devolver el ID del pedido como JSON
echo json_encode(array('id_pedido' => $id_pedido));

// Cerrar la conexión
$conexion->close();





?>
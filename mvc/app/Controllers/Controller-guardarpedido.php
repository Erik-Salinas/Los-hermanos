<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loshermanos";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos enviados en el cuerpo de la solicitud
$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data)) {
    foreach ($data as $producto) {
        $tipo = $conn->real_escape_string($producto['tipo']);
        $tam = $conn->real_escape_string($producto['tam']);
        $precio = $conn->real_escape_string($producto['precio']);
        $cantidad = $conn->real_escape_string($producto['cantidad']);

        // Preparar la consulta SQL para insertar los datos en la base de datos
        $sql = "INSERT INTO pedido (tipo, tamaño, precio, cantidad) VALUES ('$tipo', '$tam', '$precio', '$cantidad')";

        if ($conn->query($sql) === TRUE) {
            $response = array("status" => "success", "message" => "Pedido guardado correctamente");
        } else {
            $response = array("status" => "error", "message" => "Error al guardar el pedido: " . $conn->error);
        }
    }
} else {
    $response = array("status" => "error", "message" => "Datos no válidos");
}

$conn->close();

// Devolver la respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($response);
?>

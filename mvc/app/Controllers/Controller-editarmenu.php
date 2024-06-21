<?php

include '../../config/conexcion.php';

$id = $_POST['id'];
$tipo = $_POST['tipo'];
$tamaño = $_POST['tamaño'];
$stock = $_POST['stock'];
$precio = $_POST['precio'];


$sql = $conexion->query("UPDATE menu SET tipo='$tipo', stock='$stock', tamaño='$tamaño', precio='$precio' WHERE id_producto='$id'");

if ($sql) {
    $mensaje = "Producto editado Correctamente";
} else {
    echo "Producto Editado de manera Incorrecta";
}

if ($sql) {
    echo "<script>
        alert('Datos actualizados correctamente');
        window.location.href = '../../views/menu.php'; // Redirige al formulario o a otra página
        </script>";
} else {
    echo "<script>
        alert('Error al actualizar los datos ');
        window.history.back(); // Regresa al formulario
        </script>";
} 
// Incluir la conexión a la base de datos y cualquier otra configuración necesaria

// Verificar si se recibió un ID válido para editar el producto



?>
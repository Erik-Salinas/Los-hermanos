<?php

include '../../config/conexcion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $tipo = $_POST['tipo'];
    $tamaño = $_POST['tamaño'];
    $stock = $_POST['stock'];
    $precio = $_POST['precio'];

    if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        $img_name = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        $img_path = "../../uploads/" . $img_name;

        if (move_uploaded_file($img_tmp, $img_path)) {
            $img_path = "../uploads/" . $img_name; // Ruta relativa a la carpeta donde se guardó la imagen
            $sql = $conexion->query("UPDATE menu SET tipo='$tipo', stock='$stock', tamaño='$tamaño', precio='$precio', img='$img_path' WHERE id_producto='$id'");
        } else {
            die("Error al mover el archivo de imagen.");
        }
    } else {
        $sql = $conexion->query("UPDATE menu SET tipo='$tipo', stock='$stock', tamaño='$tamaño', precio='$precio' WHERE id_producto='$id'");
    }

    if ($sql) {
        echo "<script>
            alert('Datos actualizados correctamente');
            window.location.href = '../../views/menu.php';
        </script>";
    } else {
        echo "<script>
            alert('Error al actualizar los datos');
            window.history.back();
        </script>";
    }
}
?>

<?php
// Configuración y carga de librerías
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/Exception.php';
require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';

include ("../config/conexcion.php");

// Verifica si el token está presente en la URL
if (!isset($_GET['token'])) {
    die("Token no proporcionado.");
}

$token = $conexion->real_escape_string($_GET['token']);

// Verifica si el token es válido
$sql = $conexion->query("SELECT * FROM registro_usuario WHERE reset_token='$token' LIMIT 1");
if ($sql->num_rows == 0) {
    die("Token no válido o expirado.");
}

// Procesa el formulario de restablecimiento de contraseña
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_password = $conexion->real_escape_string($_POST['new_password']);
    $confirm_password = $conexion->real_escape_string($_POST['confirm_password']);

    if ($new_password != $confirm_password) {
        echo "<div><h2>Las contraseñas no coinciden.</h2></div>";
    } else {
        // Hash de la nueva contraseña
        $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

        // Actualiza la contraseña en la base de datos
        $conexion->query("UPDATE registro_usuario SET registry_key='$hashed_password', reset_token=NULL WHERE reset_token='$token'");

        echo "<div><h2>Tu contraseña ha sido actualizada. Ahora puedes <a href='user.php'>iniciar sesión</a>.</h2></div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Restablecer Contraseña</title>
</head>
<body>
    <h2>Restablecer Contraseña</h2>
    <form method="POST" action="">
        <label for="new_password">Nueva Contraseña:</label>
        <input type="password" id="new_password" name="new_password" required><br><br>
        <label for="confirm_password">Confirmar Nueva Contraseña:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        <button type="submit">Restablecer Contraseña</button>
    </form>
</body>
</html>

<?php 
if (!empty($_POST["btnRecord"])) {  // Comprueba si el campo "btnRecord" no está vacío
    // El usuario envió el formulario
    if (empty($_POST["name"]) or empty($_POST["lastname"]) or empty($_POST["user_registration"]) or empty($_POST["registry_key"])or empty($_POST["email"])or empty($_POST["date"])or empty($_POST["sex"])) {
        // Comprueba si alguno de los campos obligatorios está vacío
        echo "<div class='alert alert-danger text-center'><h2 style='font-size: 0.8em;'>UNO DE LOS CAMPOS SE ENCUENTRA VACÍO</h2></div>";
        // Muestra mensaje de error si se encuentran campos vacíos
    } else {
        // Todos los campos obligatorios tienen valores
        $name = $_POST["name"];  
        $lastname = $_POST["lastname"]; 
        $user_registration = $_POST["user_registration"];  
        $raw_password = $_POST["registry_key"];  // Obtiene la contraseña en texto plano
        $registry_key = password_hash($raw_password, PASSWORD_DEFAULT); // Encripta la contraseña
        $tel = $_POST["tel"];
        $dire = $_POST["dire"];
        $email = $_POST["email"];
        $date = $_POST["date"];
        $sex = $_POST["sex"];

        $sql = "INSERT INTO registro_usuario (name, lastname, user_registration, registry_key, tel, dire, email, date, sex) VALUES ('$name', '$lastname', '$user_registration', '$registry_key', '$tel', '$dire', '$email', '$date', '$sex')";
        // Construye la consulta SQL para insertar los datos del usuario

        $result = $conexion->query($sql); // Ejecuta la consulta

        if ($result) {  // Comprueba si la ejecución de la consulta fue exitosa
            echo "<div class='alert-regis alert-success text-center'><h2 style='font-size: 0.8em;'>USUARIO REGISTRADO CORRECTAMENTE</h2></div>";
            // Muestra mensaje de éxito al registrarse
        } else {
            echo "<div class='alert alert-danger text-center'><h2 style='font-size: 0.8em;'>ERROR AL REGISTRAR</h2></div>";
            // Muestra mensaje de error si el registro falla
      }
}
}


?>

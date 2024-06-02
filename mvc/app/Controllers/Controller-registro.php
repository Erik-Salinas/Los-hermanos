<?php 
    if (!empty($_POST["btnRecord"])) {  // Comprueba si el campo "registro" no está vacío
        // El usuario envió el formulario (asumiendo que "registro" es un campo oculto)
        if (empty($_POST["name"]) or empty($_POST["lastname"]) or empty($_POST["user_registration"]) or empty($_POST["registry_key"])or empty($_POST["email"])or empty($_POST["date"])or empty($_POST["sex"])) {
            // Comprueba si alguno de los campos obligatorios está vacío
            echo "<div class='alert alert-danger text-center'><h2 style='font-size: 0.8em;'>UNO DE LOS CAMPOS SE ENCUENTRA VACÍO</h2></div>";
            // Muestra mensaje de error si se encuentran campos vacíos
        } else {
            // Todos los campos obligatorios tienen valores
            $name = $_POST["name"];  
            $lastname = $_POST["lastname"]; 
            $user_registration = $_POST["user_registration"];  
            $registry_key = $_POST["registry_key"]; 
            $email = $_POST["email"];
            $date = $_POST["date"];
            $sex = $_POST["sex"];
    
            $sql = "insert into registro_usuario(name,lastname,user_registration,registry_key,email,date,sex)value('$name','$lastname','$user_registration','$registry_key','$email','$date','$sex')";
            // Construye la consulta SQL para insertar los datos del usuario
    
            $sql = $conexion->query($sql); // Ejecuta la consulta
    
            if ($sql == 1) {  // Comprueba si la ejecución de la consulta fue exitosa (puede variar según el sistema de base de datos)
                echo "<div class='alert alert-success text-center'><h2 style='font-size: 0.8em;'>USUARIO REGISTRADO CORRECTAMENTE</h2></div>";
                // header("location: ../views/user.php");  <- Si se pone envia automaticamente al usuario a iniciar sesion pero NO aparece la linea de arriba
                // Muestra mensaje de éxito al registrarse
            } else {
                echo "<div class='alert alert-danger text-center'><h2 style='font-size: 0.8em;'>ERROR AL REGISTRAR</h2></div>";
                // Muestra mensaje de error si el registro falla
            }
        }
    }
    
?>

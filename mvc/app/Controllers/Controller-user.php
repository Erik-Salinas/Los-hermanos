<?php 
        if (!empty($_POST["Iniciar"])) {
            if (empty($_POST["user"]) || empty($_POST["password"])) {
                // Verifica si ambos campos del formulario enviado están vacíos.
                echo "<div class='alert'><h2>LOS CAMPOS SE ENCUENTRAN VACÍOS</h2></div>";
            } else {
                $user = $conexion->real_escape_string($_POST["user"]);
                $password = $_POST["password"];
                // Consulta a la Base de Datos
                $sql = $conexion->prepare("SELECT * FROM registro_usuario WHERE user_registration = ?");
                $sql->bind_param("s", $user);
                $sql->execute();
                $result = $sql->get_result();
                

                if ($result->num_rows > 0) {
                    $data = $result->fetch_assoc();
                    // Verifica la contraseña
                    if (password_verify($password, $data['registry_key'])) {
                        // Inicio de sesión exitoso
                        // Inicia una sesión de usuario
                        session_start();
                        $_SESSION['user'] = $user;
                        var_dump($_SESSION);
                        header("Location: ../../front-end/index.php");
                        exit();
                    } else {
                        echo "<div class='alert'><h2>ACCESO DENEGADO</h2></div>";
                    }
                } else {
                    echo "<div class='alert'><h2>USUARIO NO ENCONTRADO</h2></div>";
                }
            }
        }
?>

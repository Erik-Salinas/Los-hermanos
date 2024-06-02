<?php 
    if(!empty($_POST["Iniciar"])){
        if(empty($_POST["user"]) and empty($_POST["password"])){
            //anidada verifica si ambos campos del formulario enviado están vacíos. Si ambos están vacíos, significa que el usuario no ingresó ninguna credencial. 
            echo "<div class='alert'><h2>LOS CAMPOS SE ENCUENTRAN VACIOS</h2></div>";
        }
          //Si los campos de nombre de usuario y contraseña no están vacíos, este bloque se ejecuta.
        else{
            $user = $_POST["user"];
            $password= $_POST["password"];
            //Consulta a la Base de Datos
            $sql = $conexion->query("select * from login_empresa  where user ='$user' and password ='$password'");
            if($data = $sql->fetch_object()){
                header("location: ../views/panel.php");
            }
            else{
                echo"<div class='alert'> <h2>ACCESO DENEGADO <h2/> </div>";
            }
        }
    }
?>


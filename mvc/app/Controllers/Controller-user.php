<?php 
    if(!empty($_POST["Iniciar"])){
        if(empty($_POST["user"]) and empty($_POST["password"])){
            //anidada verifica si ambos campos del formulario enviado están vacíos. Si ambos están vacíos, significa que el usuario no ingresó ninguna credencial. 
            echo "<div><h2>LOS CAMPOS SE ENCUENTRAN VACIOS</h2></div>";
        }
          //Si los campos de nombre de usuario y contraseña no están vacíos, este bloque se ejecuta.
        else{
            $user = $_POST["user"];
            $password= $_POST["password"];
            //Consulta a la Base de Datos
            $sql = $conexion->query("select * from registro_usuario  where user_registration ='$user' and registry_key  ='$password'");
            if($data = $sql->fetch_object()){
                header("location: ../../front-end/index.php");
            }
            else{
                echo"<div> <h2>ACCESO DENEGADO <h2/> </div>";
            }
        }
    }
?>
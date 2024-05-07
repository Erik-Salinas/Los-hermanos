<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../public/css/styles.css" />
    <title>Registro</title>
</head>

<body>
    <main class="mainMenu">
        <?php 
        include ("../config/conexcion.php");
        include ("../app/Controllers/Controller-registro.php");
        ?>
        <section class="signUp">
            <form action="" method="post" autocomplete="off" class=" signUpForm">
                <h1>Registrate</h1>
                <div class="input">
                    <input type="text" name="name" placeholder="Nombre">
                </div>
                <div class="input">
                    <input type="text" name="lastname" placeholder="Apellido">
                </div>
                <div class="input">
                    <input type="text" name="user_registration" placeholder="Usuario">
                </div>
                <div class="input">
                    <input type="password" name="registry_key" placeholder="Contraseña">
                </div>
                <div class="input">
                    <input type="email" name="email" placeholder="Correo">
                </div>
                <div class="input">
                    <label>Fecha de nacimiento</label>
                    <input type="date" name="date">
                </div>
                <div class="input sex">
                    <label>Sexo</label>
                    <select name="sex">
                        <option value="#" disabled selected>Seleccionar</option>
                        <option value="Mujer">Mujer</option>
                        <option value="Hombre">Hombre</option>
                        <option value="Personalizado">Personalizado</option>
                    </select>
                </div>
                <div class="btnRecord">
                    <button type="submit"name="btnRecord" value="registrarse">Registrate</button>
                    <a href="user.html">volver</a>
                </div>
            </form>
        </section>
    </main>
</body>

</html>
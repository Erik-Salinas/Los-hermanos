<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../public/css/styles.css" />
    <title>Empresa</title>
  </head>
  <body>
    <main class="inicioS">
    <?php 
        include ("../config/conexcion.php");
        include ("../app/Controllers/Controller-company.php");
      ?>
      <section class="login">
        <form action="" method="post" autocomplete="off" class="loginForm">
          <div class="logo">
            <img src="../public/img/logo.png" alt="Logo de empresa" />
          </div>
          <div class="input">
            <input type="text" name="user" placeholder="Usuario" required>
          </div>
          <div class="input">
            <input type="text" name="password"  placeholder="Contraseña" required>
          </div>
          <div>
          <button type="submit" name="Iniciar" value="Iniciar">Iniciar sesión</button>
          </div>
        </form>
      </section>
    </main>
  </body>
</html>

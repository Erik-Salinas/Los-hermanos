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
    <title>Panel</title>
    <link rel="stylesheet" href="../public/css/styles.css" />
</head>
<body>
    <!-- *ERIK -->
    <header>
        <button class="openMenu" id="openMenu"><i class="fa-solid fa-bars"></i></button>
        <nav class="nav" id="nav">
            <button class="closeMenu" id="closeMenu"><i class="fa-solid fa-xmark"></i></button>
            <img src="../public/img/logo.png" alt="Los hermanos" srcset="../assets/perfil.png 2x" class="logo">
            <ul class="navList">
                <li><a href="panel.php"><i class="fa-solid fa-house"></i>Panel</a></li>
                <li><a href="menu.php"><i class="fa-brands fa-product-hunt"></i>Menu</a></li>
                <li><a href="pedidos.php"><i class="fa-solid fa-clipboard-list"></i></i>Pedidos</a></li>
                <li class="listActive"><a href="productos.html"><i class="fa-solid fa-box-open"></i>Productos</a></li>
                <li><a href="usuarios.php"><i class="fa-solid fa-user"></i></i>Usuarios</a></li>
                <li><a href="../../front-end/index.php" > <i class="fa-solid fa-arrow-right-to-bracket"></i>Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
    <main class="mainMenu">
        <form class="nuevoProdu" action="mvc\resources\views\prototipos\menu.php" method="post">
            
            TIPO
            <input type="text" autocomplete="off" name="type" id="">
            <br>
            STOCK
            <input type="number" autocomplete="off" name="stock" id="">
            <br>
            TAMAÑO
            <select name="tam" id="">
                <option value="Chica">Chica</option>
                <option value="Grande">Grande</option>
            </select>
            <br>
            PRECIO
            <input type="number"autocomplete="off"  name="price" id="">
            <br>
            <button class="ag" type="submit">Agregar</button>
            <button class="delet" type="reset">Eliminar</button>
        </form>
    </main>
    <script src="../public/js/menu.js"></script>
</body>
</html>
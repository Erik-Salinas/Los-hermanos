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
    <title>Productos</title>
    <link rel="stylesheet" href="../public/css/styles.css" />
</head>
<body>
    <!-- *VICKY -->
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
    <main class="">
    <div class="">
        <?php
        $conexion= mysqli_connect("localhost","root","","loshermanos") or die ("Problemas con la conexion a la base de datos");
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $registros= mysqli_query($conexion,"insert into menu (tipo,stock,tamaño,precio) values ('$_POST[type]','$_POST[stock]','$_POST[tam]','$_POST[price]')  ") or die ("Error al insertar los datos"); 
        }
    
    
    
        
        $registros = mysqli_query($conexion,"select * from menu") or die ("Problemas en la conexion con la tabla");
    
        echo "<div class='pedidos '><h2>PRODUCTOS</h2></div>";
        echo "<div class='products'</div>";
        while($reg=mysqli_fetch_array($registros)){

            echo "<div class=card> ";
            echo '<img  src="' . $reg['img'] . '">';
            echo "<div class=item>";
            echo "<h2 >".$reg['tipo']."</h2>";
            echo "<h3 >". $reg['tamaño']."</h3>";
            if ($reg['stock'] == 0) {
                echo "<h3 class='cero btn-primary'>" . $reg['stock'] . "</h3>";
            }elseif ($reg['stock'] > 0 && $reg['stock'] < 101) {
                echo "<h3 class='medio btn-primary'>" . $reg['stock'] . "</h3>";
            }else{
                echo "<h3 class='aprobado btn-primary'>" . $reg['stock'] . "</h3>";
            }
            
            echo "<h3 >"."$".$reg['precio']."</h3>";
            
            echo "</div>";
            echo "</div>";
    
        }
        mysqli_close($conexion);
    ?>
    </div>
    </main>
    <script src="../public/js/menu.js"></script>
</body>
</html>
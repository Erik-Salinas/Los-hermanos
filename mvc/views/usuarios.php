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
    <title>Usuarios</title>
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
                <li><a href="productos.php"><i class="fa-solid fa-box-open"></i>Productos</a></li>
                <li class="listActive"><a href="usuarios.html"><i class="fa-solid fa-user"></i></i>Usuarios</a></li>
                <li><a href="../../front-end/index.php" > <i class="fa-solid fa-arrow-right-to-bracket"></i>Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <?php
            $conexion= mysqli_connect("localhost","root","","loshermanos") or die ("Problemas con la conexion a la base de datos");
  


    
    
    
            
            $registros = mysqli_query($conexion,"select * from registro_usuario ORDER BY id_regis_usuario DESC LIMIT 10") or die ("Problemas en la conexion con la tabla");
    
    
            //las opciones ya las cambie por unas q invente yo
            echo "<div class='pedidos '><h2>USUARIOS</h2></div>";
            echo "<table>";
            echo "<tr class=titulo>";
            echo "<td class='lastnameCliente' >"."ID"."</td>";
            echo "<td class='nameCliente' >"."NOMBRE"."</td>";
            echo "<td class='lastnameCliente'>"."APELLIDO"."</td>";
            echo "<td class='nameCliente' >"."USUARIO". "</td>";
            echo "<td class='nameCliente' >"."TELEFONO". "</td>";
            echo "<td class='nameCliente' >"."DIRECCIÓN". "</td>";
            echo "<td class='lastnameCliente' >"."EMAIL". "</td>";
            echo "<td class='nameCliente' >"."FECHA DE NACIMIENTO". "</td>";
            echo "<td class='lastnameCliente' >"."GENERO". "</td>";
            echo "</tr>"."<br>";
    
            while($reg=mysqli_fetch_array($registros)){
                // HAY QUE CAMBIAR LO QUE SIGE A $REG CON LO QUE PONGAMOS EN LA BASE DE DATOS
                echo "<tr class=opciones>";
                echo "<td  >"."N°:".$reg['id_regis_usuario']."</td>" ;
                echo "<td  >".$reg['name']."</td>" ;
                echo "<td >".$reg['lastname']."</td>";
                echo "<td >".$reg['user_registration']."</td>";
                echo "<td >".$reg['tel']."</td>";
                echo "<td >".$reg['dire']."</td>";
                echo "<td >". $reg['email']."</td>";
                echo "<td >".$reg['date']."</td>";
                echo "<td >".$reg['sex']."</td>";
                echo "</tr>";
    
            }
            echo "</table>";
            mysqli_close($conexion);
        ?>
    
    </main>
    <script src="../public/js/menu.js"></script>
</body>
</html>
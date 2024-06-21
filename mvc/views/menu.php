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
    <title>Menu</title>
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
                <li class="listActive"><a href="menu.html"><i class="fa-brands fa-product-hunt"></i>Menu</a></li>
                <li><a href="pedidos.php"><i class="fa-solid fa-clipboard-list"></i></i>Pedidos</a></li>
                <li><a href="productos.php"><i class="fa-solid fa-box-open"></i>Productos</a></li>
                <li><a href="usuarios.php"><i class="fa-solid fa-user"></i></i>Usuarios</a></li>
                <li><a href="../../front-end/index.php" > <i class="fa-solid fa-arrow-right-to-bracket"></i>Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <div>
        <button><a href="nuevo-producto.php">Agregar</a></button>
    </div>
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "loshermanos") or die("Problemas con la conexión a la base de datos");

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['type'])) {
            $registros = mysqli_query($conexion, "INSERT INTO menu (tipo, stock, tamaño, precio) VALUES ('{$_POST['type']}', '{$_POST['stock']}', '{$_POST['tam']}', '{$_POST['price']}')") or die("Error al insertar los datos");
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
            $delete_id = $_POST['delete_id'];
            $deleteQuery = "DELETE FROM menu WHERE id_producto = $delete_id";
            mysqli_query($conexion, $deleteQuery) or die("Error al eliminar el producto");

            if (isset($_POST['is_ajax'])) {
                echo json_encode(['success' => true]);
                exit;
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editar_producto'])) {
            $edit_id = $_POST['editar_producto'];
            $editQuery = "SELECT * FROM menu WHERE id_producto = $edit_id";
            $result = mysqli_query($conexion, $editQuery);
            $editData = mysqli_fetch_assoc($result); // Fetch the data as an associative array
        
            // Now build the edit form using $editData
            echo '
            <form class="nuevoProdu" action="../app/Controllers/Controller-editarmenu.php" method="post">
                <input type="hidden" name="id" value="'.$editData['id_producto'].'">
                ID
                <input type="number" autocomplete="off" name="id_producto" id="id_producto" value="'.$editData['id_producto'].'" disabled>
                <br>
                TIPO
                <input type="text" autocomplete="off" name="tipo" id="tipo" value="'.$editData['tipo'].'">
                <br>
                STOCK
                <input type="number" autocomplete="off" name="stock" id="stock" value="'.$editData['stock'].'">
                <br>
                TAMAÑO
                <select name="tamaño" id="tamaño">
                    <option value="Chica" '.($editData['tamaño'] == 'Chica' ? 'selected' : '').'>Chica</option>
                    <option value="Grande" '.($editData['tamaño'] == 'Grande' ? 'selected' : '').'>Grande</option>
                </select>
                <br>
                PRECIO
                <input type="number" autocomplete="off" name="precio" id="precio" value="'.$editData['precio'].'">
                <br>
                <button class="ag" type="submit">Confirmar</button>
            </form>';
        }
    

            if (isset($_POST['is_ajax'])) {
                echo json_encode(['success' => true]);
                exit;
            }
        

        $registros = mysqli_query($conexion, "SELECT * FROM menu") or die("Problemas en la conexión con la tabla");

        echo "<div class='pedidos'><h2>MENU</h2></div>";
        echo "<table>";
        echo "<tr class='titulo'>";
        echo "<td class='nameCliente'>ID</td>";
        echo "<td class='lastnameCliente'>TIPO</td>";
        echo "<td class='nameCliente'>STOCK</td>";
        echo "<td class='lastnameCliente'>TAMAÑO</td>";
        echo "<td class='nameCliente'>PRECIO</td>";
        echo "<td class='nameCliente'>IMAGEN</td>";
        echo "<td class='nameCliente'>ACCIÓN</td>";
        echo "</tr><br>";

        while ($reg = mysqli_fetch_array($registros)) {
            echo "<tr class='opciones'>";
            echo "<td>N°:{$reg['id_producto']}</td>";
            echo "<td>{$reg['tipo']}</td>";
            echo "<td>{$reg['stock']}</td>";
            echo "<td>{$reg['tamaño']}</td>";
            echo "<td>$ {$reg['precio']}</td>";
            echo "<td><img style= 'width:4rem; height:4rem; margin:auto; '  src='{$reg['img']}'></td>";
            echo "<td style='display:flex; align-items:center;'>
            
             <form  method='post'>
                <input type='hidden' name='editar_producto' value='{$reg['id_producto']}'>
                <button type='submit' style='color:black; cursor: pointer; border: none; background: none; padding: 0; text-decoration: underline;'>Editar</button>
            </form>;

                
                    
                <form method='post' >
                        <input type='hidden' name='delete_id' value='{$reg['id_producto']}'>
                        <button type='submit' style='color:red; cursor: pointer;' >Eliminar</button>
                </form>
                
                </td>";

            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($conexion);
    ?>
</main>

    <script src="../public/js/menu.js"></script>
</body>
</html>
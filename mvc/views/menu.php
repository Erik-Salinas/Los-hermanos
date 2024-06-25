<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Menu</title>
    <link rel="stylesheet" href="../public/css/styles.css" />
</head>

<body>
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
                <li><a href="../../front-end/index.php"> <i class="fa-solid fa-arrow-right-to-bracket"></i>Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div>
            <button class="agregar"><a href="nuevo-producto.php">Agregar</a></button>
        </div>
        <?php
$conexion = mysqli_connect("localhost", "root", "", "loshermanos") or die("Problemas con la conexión a la base de datos");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['type'])) {
    $tipo = $_POST['type'];
    $stock = $_POST['stock'];
    $tam = $_POST['tam'];
    $precio = $_POST['price'];

    // Procesar la carga del archivo
    $img_name = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];
    $img_url = ''; // Variable para almacenar la URL de la imagen
    $img_url2 = ''; // Variable para almacenar la URL de la imagen en la segunda carpeta

    // Verificar si se subió un archivo y moverlo a una ubicación deseada
    if (!empty($img_name) && !empty($img_tmp)) {
        $uploads_dir1 = 'img/'; // Primera carpeta de destino
        $uploads_dir2 = '../../front-end/img/'; // Segunda carpeta de destino
        $img_url = $uploads_dir1 . $img_name;
        $img_url2 = $uploads_dir2 . $img_name;
    
        // Mover la imagen a la primera carpeta
        if (move_uploaded_file($img_tmp, $img_url)) {
            // Copiar la imagen a la segunda carpeta
            copy($img_url, $img_url2);
        }
    } else {
        echo "Debe seleccionar una imagen para subir.";
    }
    

    // Guardar la URL de la imagen en la base de datos
    $stmt = $conexion->prepare("INSERT INTO menu (tipo, stock, tamaño, img, precio) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sisss", $tipo, $stock, $tam, $img_url, $precio);

    if ($stmt->execute()) {
        $message = "PRODUCTO AGREGADO CORRECTAMENTE";
        echo "<script>
                   // Crear un div para la ventana emergente
        var customAlert = document.createElement('div');
        // Aplicar estilos CSS al div de la ventana emergente
        customAlert.style.position = 'fixed';
        customAlert.style.top = '18%';
        customAlert.style.left = '50%';
        customAlert.style.transform = 'translate(-50%, -50%)';
        customAlert.style.color = 'white';
        customAlert.style.fontSize = 'medium';
        customAlert.style.textAlign = 'center';
        customAlert.style.background = '#ff7b1b';
        customAlert.style.padding = '20px';
        customAlert.style.borderRadius = '10px';
        customAlert.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.5)';
        customAlert.style.zIndex = '9999';
        // Agregar el mensaje al div de la ventana emergente
        customAlert.textContent = '$message';
        // Agregar el div de la ventana emergente al cuerpo del documento
        document.body.appendChild(customAlert);
        
        // Desaparecer la ventana emergente después de 2 segundos
        setTimeout(function() {
            customAlert.style.display = 'none';
        }, 2000); // 2000 milisegundos = 2 segundos
            </script>";

    } else {
        echo "Error al insertar los datos: " . $stmt->error;
    }

    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $deleteQuery = "DELETE FROM menu WHERE id_producto = ?";
    $stmt = $conexion->prepare($deleteQuery);
    $stmt->bind_param("i", $delete_id);

    if ($stmt->execute()) {
        $message = "PRODUCTO ELIMINADO CORRECTAMENTE";
        echo "<script>
                   // Crear un div para la ventana emergente
        var customAlert = document.createElement('div');
        // Aplicar estilos CSS al div de la ventana emergente
        customAlert.style.position = 'fixed';
        customAlert.style.top = '18%';
        customAlert.style.left = '50%';
        customAlert.style.transform = 'translate(-50%, -50%)';
        customAlert.style.color = 'white';
        customAlert.style.fontSize = 'medium';
        customAlert.style.textAlign = 'center';
        customAlert.style.background = '#ff7b1b';
        customAlert.style.padding = '20px';
        customAlert.style.borderRadius = '10px';
        customAlert.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.5)';
        customAlert.style.zIndex = '9999';
        // Agregar el mensaje al div de la ventana emergente
        customAlert.textContent = '$message';
        // Agregar el div de la ventana emergente al cuerpo del documento
        document.body.appendChild(customAlert);
        
        // Desaparecer la ventana emergente después de 2 segundos
        setTimeout(function() {
            customAlert.style.display = 'none';
        }, 2000); // 2000 milisegundos = 2 segundos
            </script>";
    } else {
        echo "Error al eliminar el producto: " . $stmt->error;
    } 

    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editar_producto'])) {
    $edit_id = $_POST['editar_producto'];
    $editQuery = "SELECT * FROM menu WHERE id_producto = ?";
    $stmt = $conexion->prepare($editQuery);
    $stmt->bind_param("i", $edit_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $editData = $result->fetch_assoc();

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
        URL de la Imagen
        <input type="text" autocomplete="off" name="img" id="img" value="'.$editData['img'].'">
        <br>
        PRECIO
        <input type="number" autocomplete="off" name="precio" id="precio" value="'.$editData['precio'].'">
        <br>
        <button class="ag" type="submit">Confirmar</button>
    </form>';
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
    echo "<td><img style='width:4rem; height:4rem; margin:auto;' src='{$reg['img']}'></td>";
    echo "<td style='display:flex; align-items: center; justify-content: space-evenly;'>
        <form method='post'>
            <input type='hidden' name='editar_producto' value='{$reg['id_producto']}'>
            <button type='submit' class='editar' cursor: pointer; border: none; background: none; padding: 0; text-decoration: underline;'>EDITAR</button>
        </form>
        <form method='post'>
            <input type='hidden' name='delete_id'  value='{$reg['id_producto']}'>
            <button type='submit' class='borrar'  cursor: pointer;'>ELIMINAR</button>
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
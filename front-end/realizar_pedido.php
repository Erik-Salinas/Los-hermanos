<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Los hermanos</title>
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <!--Font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Modernizr JS for IE8 support of php5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
     <!-- Incluye Axios desde un CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <style>
        .card { border: 1px solid #ccc; padding: 16px; margin: 16px; text-align: center; }
        .cart-item { display: flex; align-items: center; justify-content: space-between; margin-bottom: 10px; }
        .agregado img { width: 50px; height: 50px; }
        .quantity-controls { display: flex; align-items: center;}
        .quantity-controls button { margin: 0 5px;  border:solid 1px black; background-color: white;}
    </style>
</head>
<body>
<?php
session_start();

// Iniciar sesión si no está iniciada
    if (!isset($_SESSION['user'])) {
    header("Location: ../mvc/views/user.php");
    exit();
}
// Mostrar una ventana emergente con el mensaje de bienvenida usando JavaScript
$username = strtoupper($_SESSION['user']);

// Mensaje de bienvenida personalizado
$message = "¿QUÉ VAS A LLEVAR HOY $username?"; // Puedes personalizar este mensaje según tus necesidades

// Generar un script para mostrar una ventana emergente con estilo personalizado
echo "<script>
        // Crear un div para la ventana emergente
        var customAlert = document.createElement('div');
        // Aplicar estilos CSS al div de la ventana emergente
        customAlert.style.position = 'fixed';
        customAlert.style.top = '15%';
        customAlert.style.left = '50%';
        customAlert.style.transform = 'translate(-50%, -50%)';
        customAlert.style.color = 'white';
        customAlert.style.fontSize = 'medium';
        customAlert.style.textAlign = 'center';
        customAlert.style.background = 'rgba(255, 0, 0, 0.778)';
        customAlert.style.padding = '20px';
        customAlert.style.border = '2px solid rgba(255, 0, 0, 0.778)';
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

?>
    <header>
        <div id="side-nav" class="sidenav">
            <a href="javascript:void(0)" id="side-nav-close">&times;</a>

            <div class="sidenav-content">
                <p>
                    Kuncen WB1, Wirobrajan 10010, DIY
                </p>
                <p>
                    <span class="fs-16 primary-color">(+68) 120034509</span>
                </p>
                <p>info@yourdomain.com</p>
            </div>
        </div>
        <div id="side-search" class="sidenav">
            <a href="javascript:void(0)" id="side-search-close">&times;</a>
            <div class="sidenav-content">
                <form action="">

                    <div class="input-group md-form form-sm form-2 pl-0">
                        <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="input-group-text red lighten-3" id="basic-text1">
                                <i class="fas fa-search text-grey" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>

                </form>
            </div>


        </div>
        <div id="canvas-overlay"></div>
        <div class="boxed-page">
            <nav id="navbar-header" class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
                        <img src="img/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="lnr lnr-menu"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                        <ul class="navbar-nav d-flex justify-content-between">
                            <div class="d-flex flex-lg-row flex-column">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">Nosotros</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Platos especiales
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="special-dishes.php">Pizza Margarita</a>
                                        <a class="dropdown-item" href="special-dishes.php">Pizza BBQ Pollo</a>
                                    </div>
                                </li>
                            </div>
                        </ul>

                        <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="#">
                            <img src="img/logo.png" alt="">
                        </a>
                        <ul class="navbar-nav d-flex justify-content-between">
                            <div class="d-flex flex-lg-row flex-column">
                                <li class="nav-item active">
                                    <a class="nav-link" href="menu.php">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="team.php">Equipo</a>
                                </li>
                            </div>
                            <li class="nav-item">
                                <a id="side-search-open" class="nav-link" href="../mvc/views/user.php">
                                    <i class="fa-solid fa-user "></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    </header>
    <main >
    <div class="heading-section text-center">
    <h2 class="subheading">Productos</h2>
</div>
<div class="products" id="product-list"></div>
<h2>Carrito</h2>
<div class="agregado-container">
    <ul id="cart-items"></ul>
    <h5 id="cart-total">Total: $0</h5>
    <button class="pay" onclick="checkout()">Pedir</button>
    <button onclick="borrarTodo()" class="delet-all">Borrar todo</button>
</div>
    <script>

let cart = [];

function addToCart(tipo, precio, tam, img) {
    const productKey = `${tipo}-${precio}-${tam}-${img}`;
    const productIndex = cart.findIndex(item => item.key === productKey);
    if (productIndex !== -1) {
        cart[productIndex].cantidad += 1;
    } else {
        cart.push({ key: productKey, tipo: tipo, precio: precio, tam: tam, img: img, cantidad: 1 });
    }
    updateCartUI();
}

function updateCartUI() {
    const cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = '';
    cart.forEach((item, index) => {
        cartItems.innerHTML += `
            <li class="agregado">
                <img src="${item.img}" alt="${item.tipo}">
                <span>${item.tipo} - $${item.precio} - ${item.tam}</span>
                <div class="quantity-controls">
                    <button onclick="decrementar(${index})">-</button>
                    <span>${item.cantidad}</span>
                    <button onclick="incrementar(${index})">+</button>
                </div>
                <button class="delet" onclick="removeFromCart(${index})">Eliminar</button>
            </li>
        `;
    });
    updateCartTotal();
}

function incrementar(index) {
    cart[index].cantidad += 1;
    updateCartUI();
}

function decrementar(index) {
    if (cart[index].cantidad > 1) {
        cart[index].cantidad -= 1;
    } else {
        cart.splice(index, 1);
    }
    updateCartUI();
}

function removeFromCart(index) {
    cart.splice(index, 1);
    updateCartUI();
}

function borrarTodo() {
    cart = [];
    updateCartUI();
}

function updateCartTotal() {
    const total = cart.reduce((sum, item) => sum + item.precio * item.cantidad, 0);
    document.getElementById('cart-total').textContent = `Total: $${total.toFixed(2)}`;
}

function checkout() {
    const order = {
        productos: cart,
        total: cart.reduce((sum, item) => sum + item.precio * item.cantidad, 0)
    };

    fetch('../mvc/app/Controllers/Controller-guardarpedido.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(order)
    })
    .then(response => response.text())
    .then(data => {
        alert('Compra realizada: ' + data);
        cart = [];
        updateCartUI();

        // Construir la cadena de texto con los detalles del pedido
        const pedidoText = `¡Hola! He realizado una compra en su tienda.%0AMi número de pedido es: ${data}`;

        // Codificar la cadena de texto para que sea válida en una URL
        const encodedPedidoText = encodeURIComponent(pedidoText);

        // Número de teléfono de WhatsApp
        const phoneNumber = '+5491132742025';

        // URL de WhatsApp con el mensaje como parámetro
        const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodedPedidoText}`;

        // Abrir la ventana de WhatsApp
        window.open(whatsappUrl, '_blank');
    })
    .catch(error => console.error('Error:', error));
}


function loadProducts() {
    console.log('Cargando productos...');
    fetch('../mvc/app/Controllers/Controller-mostrarproductos.php')
    .then(response => {
        if (!response.ok) {
            throw new Error('La respuesta no fue exitosa');
        }
        return response.json();
    })
    .then(products => {

        const productList = document.getElementById('product-list');
        productList.innerHTML = ''; // Limpiar el contenido antes de agregar nuevos productos

        if (!Array.isArray(products)) {
            throw new Error('Los productos no están en un formato válido');
        }

        products.forEach(product => {
            // Crear un elemento de imagen
            const img = document.createElement('img');
            img.src = product.img; // Asignar la URL de la imagen

            // Crear un h3 para mostrar el nombre del producto
            const nom = document.createElement('h3');
            nom.textContent = product.tipo;

            // Crear un h4 para mostrar el tamaño del producto
            const tam = document.createElement('h4');
            tam.textContent = product.tamaño;

            // Crear un p para mostrar el precio del producto
            const pre = document.createElement('p');
            pre.textContent = '$' + product.precio;

            // Crear un botón para agregar al carrito
            const addButton = document.createElement('button');
            addButton.textContent = 'Agregar';
            addButton.onclick = function() {
                addToCart(product.tipo, product.precio, product.tamaño, product.img);
            };

            // Asignar la clase "btn_card" al botón
            addButton.classList.add("btn-primary");

            // Crear un div con la clase card para contener la información del producto
            const cardDiv = document.createElement('div');
            cardDiv.classList.add('card');

            // Agregar los elementos al div de la tarjeta (card)
            cardDiv.appendChild(img);
            cardDiv.appendChild(nom);
            cardDiv.appendChild(tam);
            cardDiv.appendChild(pre);
            cardDiv.appendChild(addButton);

            // Agregar la tarjeta al listado de productos
            productList.appendChild(cardDiv);
        });
    })
    .catch(error => console.error('Error al cargar productos:', error));
}

// Llamar a la función para cargar productos al cargar la página
window.onload = loadProducts;</script>
    <!-- <div id="app">
            <div class="heading-section text-center">
                <h2 class="subheading">Productos</h2>
            </div>
        
            <div>
                <div class="card" v-for="(producto, index) in producto" :key="producto.id">
                    <img :src="producto.imagen" alt="">
                    <h3>{{ producto.nombre }}</h3>
                    <h4>{{ producto.tamaño }}</h4>
                    <p>${{ producto.precio }}</p>
                    <div class="btn_card">
                        <button @click="agregar(producto)" class="btn-primary mt-3">Agregar</button>
                    </div>
                </div>
            </div>
        
        <div class="agregado-container">
        <div class="agregado" v-for="(producto, index) in carrito" :key="producto.id">
            <div class="info">
                <h5>{{ producto.nombre }}</h5>
                <p>${{ producto.precio * producto.cantidad }}</p>
            </div>
            <div class="quantity-controls">
               
                <button @click.prevent="decrementar(index)">-</button>
                <span>{{ producto.cantidad }}</span>
                <button @click.prevent="incrementar(index)">+</button>
            </div>
           
        </div>
        <div v-if="carrito.length > 0">
            <br>
            <h6 id="tot">TOTAL: ${{total}}</h6>
            <button @click="borrarTodo" class="delet-all">Borrar todo</button>
            <input type="hidden" name="total" :value="total">
            <button type="submit" @click="pagar"  class="pay"><a href="../mvc/app/Controllers/Controller-guardarpedido.php">Pagar</a></button>
        </div>    
        </div>
    </div> -->

</main>
    <footer>
        <div class="inner container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widget pr-lg-5 pr-0">
                        <img src="img/logo.png" class="img-fluid footer-logo mb-3" alt="">
                        <p>Disfruta del auténtico sabor italiano en Pizzería Los Hermanos. Variedad, frescura y tradición en cada pizza. ¡Visítanos y déjate llevar por el deleite</p>
                        <nav class="nav nav-mastfoot justify-content-start">
                            <a class="nav-link" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="nav-link" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="nav-link" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </nav>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="footer-widget px-lg-5 px-0">
                        <h4>Horario de apertura</h4>
                        <ul class="list-unstyled open-hours">
                            <li class="d-flex justify-content-between"><span>Lunes</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex justify-content-between"><span>Martes</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex justify-content-between"><span>Miercoles</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex justify-content-between"><span>Jueves</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex justify-content-between"><span>Viernes</span><span>9:00 - 02:00</span></li>
                            <li class="d-flex justify-content-between"><span>Sabado</span><span>9:00 - 02:00</span></li>
                            <li class="d-flex justify-content-between"><span>Domingo</span><span> Cerrado</span></li>
                        </ul>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="footer-widget pl-lg-5 pl-0">
                        <h4>Información</h4>
                        <p>Te informamos de las nuevas novedades.</p>
                        <form id="newsletter">
                            <div class="form-group">
                                <input type="email" class="form-control" id="emailNewsletter" aria-describedby="emailNewsletter" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Enviar</button>
                        </form>
                    </div>

                </div>
                <div class="col-md-12 d-flex align-items-center">
                    <p class="mx-auto text-center mb-0">Copyright 2019. All Right Reserved. Design by <a href="https://gettemplates.co" target="_blank">GetTemplates</a></p>
                </div>

            </div>
        </div>
    </footer>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="../public/js/menu.js"></script>

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="vendor/bootstrap/popper.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js "></script>
    <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
    <script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Main JS -->
    <script src="js/app.min.js "></script>
</body>
</html>
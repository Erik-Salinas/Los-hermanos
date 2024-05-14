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
</head>
<body>
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
        
         
    </div>	<div id="canvas-overlay"></div>
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
    <main id="app" class="">

        <div  class="heading-section text-center">
            <h2 class="subheading">Productos</h2>
        </div>

        <div >
                <div class="card" v-for="(producto, index) in producto" :key="producto.id">
                    <img :src="producto.imagen" alt="">
                    <h3>{{producto.nombre}}</h3>
                    <h4>{{producto.tamaño}}</h4>
                    <p>${{producto.precio}}</p>
                    <div class="btn_card">
                    <button @click="agregar(producto)" class="btn-primary mt-3">Agregar</button>
                    </div>
                </div>            
        </div>

        <div class="card">
            <h2><i class="fa-solid fa-cart-shopping btn-detalle"></i></h2>
            <div class="mensaje" v-if="carrito.length === 0">
                <h6>Carrito vacío</h6>
            </div>
            <div v-else class="">
                <div class="agregado" v-for="(producto, index) in carrito" :key="producto.id">
                    <img :src="producto.imagen" alt="">
                    <h2>{{producto.nombre}}</h2>
                    <h5>{{producto.tamaño}}</h5>
                    <p>${{producto.precio}}</p>
                    <div class="btn_card">
                    <button @click="borrar(index)" class="delet">Eliminar</button>
                    </div>
                </div>
                <h2>Total: ${{total}} Cantidad: {{cantidad}}</h2>
            </div>
            <div class="btn_card">
            <button @click="borrarTodo" class="btn-primary mt-3">Borrar todo</button>
            <button class="pay"><a href="https://www.mercadopago.com.ar">Pagar</a></button>
            </div>

       
        </div>
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
   </footer>	</div>
    </footer>
    <script src="../public/js/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script src="../front-end/js/comprar.js"></script>
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
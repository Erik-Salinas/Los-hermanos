<!DOCTYPE php>
<!--
	Resto by GetTemplates.co
	URL: https://gettemplates.co
-->
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
<body data-spy="scroll" data-target="#navbar">
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
        
        <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="index.php">
            <img src="img/logo.png" alt="Logo de la empresa">
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
            <div>
                <a href="realizar_pedido.php" class="btn-primary">Comprar</a>
            </div>
            <li class="nav-item">
                            <!-- Button trigger modal -->
                           <button type="button" id="side-search-open" class="nav-link btn-nav" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa-solid fa-user "></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <a id="side-search-open" class="nav-link" href="../mvc/views/user.php">
                                                Usuario
                                            </a>
                                            <a id="side-search-open" class="nav-link" href="../mvc/views/company.php">
                                                Empresa
                                            </a>
                                            <form action="../mvc/app/Controllers/Controller-cerrarsesion.php" method="post">
                                                <button type="submit" id="side-search-open" class="nav-link"> <a href="index.php"></a>Cerrar sesión</button>
                                            </form>
                                        </div>
           
                                    </div>
                                </div>
                            </div>
                        </li>
        </ul>
    </div>
</div>
</nav>		<!-- Special Dishes Section -->
<section id="gtco-special-dishes" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Especialidades
                </span>
                <h2>
                    Platos especiales
                </h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">01.</h2>
                    <div class="dishes-text">
                        <h3><span>Pizza BBQ Pollo</span></h3>
                        <p class="pt-3">Para aquellos que buscan una explosión de sabores audaces y deliciosos, la Pizza BBQ Pollo es la opción ideal. Esta pizza combina la dulzura ahumada de la salsa barbacoa con la jugosidad del pollo a la parrilla, creando una experiencia gastronómica inolvidable. La mezcla de sabores salados, dulces y picantes se complementa a la perfección con la cremosidad de la mozzarella y el toque crujiente de la cebolla roja. Cada bocado es una fiesta para el paladar, y su combinación única de ingredientes la convierte en una opción popular entre los amantes de la pizza que buscan algo fuera de lo común. Ya sea que estés celebrando una ocasión especial o simplemente buscando una aventura culinaria, la Pizza BBQ Pollo seguramente satisfará tus antojos y te dejará con ganas de más.</p>
                        <?php
                                include '../mvc/config/conexcion.php';

                                // Nombre del producto
                                $producto = "BBQ Pollo";
                                
                                // Consulta SQL para obtener el precio del producto
                                $sql = "SELECT precio FROM menu WHERE tipo = '$producto'";
                                
                                $resultado = $conexion->query($sql);
                                
                                if ($resultado->num_rows > 0) {
                                    // Mostrar el precio del producto
                                    $row = $resultado->fetch_assoc();
                                    echo "<h3 class=special-dishes-price>$$row[precio]</h3>";
                                } else {
                                    echo "Producto no encontrado";
                                }
                                
                                // Cerrar conexión
                                $conexion->close();
                                ?>
                        <a href="#" class="btn-primary mt-3">Comprar</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="img/pizza-bbq-Pollo.jpg" alt="" class="img-fluid shadow w-100">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="img/pizza-margarita.jpg" alt="" class="img-fluid shadow w-100">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                    <h2 class="special-number">02.</h2>
                    <div class="dishes-text">
                        <h3><span>Pizza Margarita:</span></h3>
                        <p class="pt-3">La Pizza Margarita es una elección clásica y atemporal que nunca decepciona. Su sencillez es su mayor fortaleza, ya que combina la frescura del tomate con la suavidad de la mozzarella y el aroma distintivo de la albahaca fresca. Esta pizza es ideal para aquellos que buscan una experiencia auténtica y tradicional italiana. La combinación de sabores naturales y la delicadeza de la albahaca hacen que cada bocado sea una verdadera delicia. Además, su versatilidad la convierte en una opción perfecta para cualquier ocasión, desde una cena informal con amigos hasta una comida familiar. Si buscas una pizza que resalte los sabores básicos pero deliciosos de la cocina italiana, la Pizza Margarita es definitivamente la elección perfecta.</p>
                        <?php
                                include '../mvc/config/conexcion.php';

                                // Nombre del producto
                                $producto = "Margarita";
                                
                                // Consulta SQL para obtener el precio del producto
                                $sql = "SELECT precio FROM menu WHERE tipo = '$producto'";
                                
                                $resultado = $conexion->query($sql);
                                
                                if ($resultado->num_rows > 0) {
                                    // Mostrar el precio del producto
                                    $row = $resultado->fetch_assoc();
                                    echo "<h3 class=special-dishes-price>$$row[precio]</h3>";
                                } else {
                                    echo "Producto no encontrado";
                                }
                                
                                // Cerrar conexión
                                $conexion->close();
                                ?>
                        <a href="#" class="btn-primary mt-3">Comprar <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Special Dishes Section -->		<footer class="mastfoot pb-5 bg-white section-padding pb-0">
    <div class="inner container">
         <div class="row">
         	<div class="col-lg-4">
         		<div class="footer-widget pr-lg-5 pr-0">
         			<img src="img/logo.png" class="img-fluid footer-logo mb-3" alt="">
	         		<p>Disfruta del auténtico sabor italiano en Pizzería Los Hermanos. Variedad, frescura y tradición en cada pizza. ¡Visítanos y déjate llevar por el deleite</p>
	         		<nav class="nav nav-mastfoot justify-content-start">
		                <a class="nav-link" href="https://www.facebook.com/?locale=es_LA">
		                	<i class="fab fa-facebook-f"></i>
		                </a>
		                <a class="nav-link" href="https://x.com/?lang=es">
		                	<i class="fab fa-twitter"></i>
		                </a>
		                <a class="nav-link" href="https://www.instagram.com/">
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
	
</div>
	<!-- External JS -->
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
</>
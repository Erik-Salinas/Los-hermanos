<!DOCTYPE php>
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
                            <button type="button" id="side-search-open" class="nav-link" data-toggle="modal" data-target="#exampleModal">
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
</nav>		<!-- Team Section -->
<section id="gtco-team" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <h2>
                    Equipo
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="img/chef-1.jpg" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">Aaron Patel</h4>
                            <p class="mb-1">CEO</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/?locale=es_LA">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://x.com/?lang=es">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.google.com/?hl=es">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="img/chef-2.jpg" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">Daniel Tebas</h4>
                            <p class="mb-1">Chef</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/?locale=es_LA">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://x.com/?lang=es">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.google.com/?hl=es">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="img/chef-3.jpg" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">Jon Snow</h4>
                            <p class="mb-1">Chef</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/?locale=es_LA">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://x.com/?lang=es">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.google.com/?hl=es">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Team Section -->		<footer class="mastfoot pb-5 bg-white section-padding pb-0">
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

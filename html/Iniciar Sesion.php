<?php
// procesar_login.php
// Simulamos una verificación de usuario
// En un caso real, se haría una consulta a la base de datos
$usuarioRegistrado = true; // Cambia esto según tu lógica de verificación

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($usuarioRegistrado) {
        header('Location: pagina-destino.php'); // Redirige al usuario a la página deseada
        exit();
    } else {
        $mensajeError = "Usuario no registrado.";
    }
}
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.9.18, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.18, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-354x455.jpeg" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Iniciar Sesion</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Inter+Tight:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter+Tight:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css?v=a1GKDT"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css?v=a1GKDT" type="text/css">
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu3 cid-uhGI0foEih" once="menu" id="menu03-e">
	<nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
		<div class="container">
			<div class="navbar-brand">
				<span class="navbar-logo">
					<a href="https://mobiri.se">
						<img src="assets/images/mbr-354x455.jpeg" alt="Mobirise Website Builder" style="height: 4rem;">
					</a>
				</span>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item dropdown">
						<a class="nav-link link text-black dropdown-toggle display-4" href="https://mobiri.se" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Articulos</a><div class="dropdown-menu" aria-labelledby="dropdown-660"><a class="text-black dropdown-item display-4" href="https://mobiri.se">Nuevo</a><a class="text-black show dropdown-item display-4" href="https://mobiri.se">Listado</a><a class="text-black show dropdown-item display-4" href="https://mobiri.se">Modificar<br><br></a></div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link link text-black dropdown-toggle display-4" href="https://mobiri.se" aria-expanded="false" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside">Servicios</a><div class="dropdown-menu" aria-labelledby="dropdown-342"><a class="text-black show dropdown-item display-4" href="https://mobiri.se">Agendar<br><br></a><a class="text-black show dropdown-item display-4" href="https://mobiri.se">Tienda</a></div>
					</li>
					<li class="nav-item">
						<a class="nav-link link text-black display-4" href="https://mobiri.se">Contacto</a>
					</li></ul>
				<div class="icons-menu">
					<a class="iconfont-wrapper" href="https://mobiri.se">
						<span class="p-2 mbr-iconfont mobi-mbri-phone mobi-mbri"></span>
					</a>
					<a class="iconfont-wrapper" href="https://mobiri.se">
						<span class="p-2 mbr-iconfont mobi-mbri-letter mobi-mbri"></span>
					</a>
					<a class="iconfont-wrapper" href="https://mobiri.se">
						<span class="p-2 mbr-iconfont mobi-mbri-map-pin mobi-mbri"></span>
					</a>
				</div>
			</div>
		</div>
	</nav>
</section>

<section data-bs-version="5.1" class="form5 cid-uhGVsnQn4f" id="form02-g">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Inicia sesión</strong></h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <!-- Actualización del formulario para enviar datos a 'procesar_login.php' -->
                <form action="procesar_login.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    <input type="hidden" name="email" data-form-email="true" value="YTMCbargSv+iPKxoKAAZNSqd6bvie2LAB9DlZdRX4xMWFtE8KWAENr4DewOm6MmNefQvoq9kA809UB4yHcRTZ7NcCeMgWq6DKyEvFzwxxrWymVicpEbzCvWmlJslhFdC">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Gracias por completar el formulario!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            Oops...! hubo un problema!
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="Nombre" data-form-field="name" class="form-control" value="" id="name-form02-g">
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="E-mail" data-form-field="email" class="form-control" value="" id="email-form02-g">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                            <button type="submit" class="btn btn-success display-7">Iniciar sesión</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer3 cid-uhGK4C19SZ" once="footers" id="footer03-f">
    <div class="container">
        <div class="row">
            <div class="row-links">
                <ul class="header-menu">
                    <li class="header-menu-item mbr-fonts-style display-5">Tienda</li>
                    <li class="header-menu-item mbr-fonts-style display-5">Categorias</li>
                    <li class="header-menu-item mbr-fonts-style display-5">Servicios</li>
                    <li class="header-menu-item mbr-fonts-style display-5">Articulos</li>
                </ul>
            </div>
            <div class="col-12 mt-4">
                <div class="social-row">
                    <div class="soc-item">
                        <a href="https://mobiri.se/" target="_blank">
                            <span class="mbr-iconfont socicon socicon-facebook display-7"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://mobiri.se/" target="_blank">
                            <span class="mbr-iconfont socicon-twitter socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://mobiri.se/" target="_blank">
                            <span class="mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://mobiri.se/" target="_blank">
                            <span class="mbr-iconfont socicon socicon-linkedin"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://mobiri.se/" target="_blank">
                            <span class="mbr-iconfont socicon socicon-twitch"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                <p class="mbr-fonts-style copyright display-7">
                    © Copyright 2030 Mobirise - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>
<section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;align-content: center;display: flex;position: relative;height: 4rem;">
    <a href="https://mobiri.se/3314091" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;">
        <img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
    </a>
    <p style="margin: 0;text-align: center;" class="display-7">&#8204;</p>
    <a style="z-index:1" href="https://mobirise.com/offline-website-builder.html">Offline Website Creator</a>
</section>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/ytplayer/index.js"></script>
<script src="assets/dropdown/js/navbar-dropdown.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/formoid/formoid.min.js"></script>
</body>
</html>

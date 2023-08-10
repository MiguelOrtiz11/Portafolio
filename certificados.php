<!DOCTYPE HTML>
<html>
	<head>
		<title>Bienvenido!</title>
		<link rel="shortcut icon" href="images/heart.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">Portafolio ❤️</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Inicio</a></li>
							<li><a href="#">Proyectos</a></li>
							<li><a href="certificados.html">Certificados</a></li>
							<li><a download="MiguelOrtizCV" href="assets/others/Miguel Angel Ortiz Escobar Currículum vitae.pdf" class="button primary">Descargar CV</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Certificados</h2>
							<p></p>
						</header>

						<!-- Image -->
							<section>
								<h3></h3>
								<div class="box alt">
									<div class="row gtr-50 gtr-uniform">

									<?php
									$dir = "Certificados jpg";
									$files = scandir($dir);
									foreach ($files as $file) {
									if ($file !== "." && $file !== "..") {
										echo "<div class='col-4 col-6-xsmall'><span class='image fit'><img src='$dir/$file' alt='$file' width='300' /></span></div>";
									}
									}
									?>

									</div>
								</div>
							</section>

					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Portafolio Miguel Ortiz. All rights reserved.</li><li>Diseñado por: <a href="#">Miguel Ortiz</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
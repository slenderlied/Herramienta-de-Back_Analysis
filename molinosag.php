<?php

$boton = $_POST["hola"];


if (!isset($_POST['hola'])){
    header("Status: 301 Moved Permanently");
    header("Location: ejecutarrutina.php");
exit;
};

?>



<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Ejecutar Rutinas BackAnalysis</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" type="image/png" href="images/Caserones_fondo.png"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a class="logo">Modelo TPH MOLINO SAG</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="index.html">Inicio</a></li>
							<li><a href="ejecutarrutina.php">Modelos</a></li>
                            <li class="active"><a>Modelo TPH SAG</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="major">
									<span class="date">Variables Decisión</span>
									<h1>Variables a<br />
									Elección TPH SAG</h1>
								</header>


							<h3>Elegir Variables</h3>
									<ul class="actions small">
									<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Variable Seleccionada</label>
										<select id="cars" name="cars">
										<option value="volvo"></option>
                                        <option value="volvo">Malla, TPH_MOLINO_SAG, ETAPA</option>
                                        <option value="saab">Malla, TPH_MOLINO_SAG, CAMPANA</option>
                                        <option value="fiat">Malla, TPH_MOLINO_SAG</option>
                                        <option value="audi">DWI, ucs, BWI, SPI, gsi, Explosivo, Malla, Taco_final, actual DeckWeight1, Densidad_Explosivo...</option>
                                       </select>
									</div>
									<div class="field">
										<label for="email">Variable Seleccionada</label>
										<select id="cars" name="cars">
										<option value="volvo"></option>
                                        <option value="volvo">Malla, TPH_MOLINO_SAG, ETAPA</option>
                                        <option value="saab">Malla, TPH_MOLINO_SAG, CAMPANA</option>
                                        <option value="fiat">Malla, TPH_MOLINO_SAG</option>
                                        <option value="audi">DWI, ucs, BWI, SPI, gsi, Explosivo, Malla, Taco_final, actual DeckWeight1, Densidad_Explosivo...</option>
                                       </select>
									</div>
								</div>
								<ul class="actions">
								<li><a href="#" class="button primary small">Agregar Variable</a></li>
										<li><a href="#" class="button small">Quitar Variable</a></li>
								</ul>
							</form>									
									</ul>
									<div class="row">
										<div class="col-6 col-12-small">
										<h3>Elegir Período</h3>
										<div class="fields">
									<div class="field">
										<label for="name">Período Seleccionada</label>
										<input type="date" name="fecha" id="fecha" />
									</div>
								</div>
								
									</div>
									
								<section>
							<form method="post" action="variables.php">

								<ul class="actions">
									<li><input type="submit" value="Ejecutar Rutina" /></li>
								</ul>
							</form>
						</section>
					</div>

				
					</div>
			

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Consulta Certificados</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Consulte su Certificado</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.html">Inicio</a></li>
								<li><a href="#">Consulta de Certificados</a></li>
								<li><a href="contacto.html">Contáctanos</a></li>

							</ul>
							<a href="#" class="close">Cerrar</a>
						</div>
					</nav>

				
			</div>

<br>
<br>
<br>


			<form method="POST" action="">
            <input type="text" name="valor">
          	<button type="submit" name="enviar">Buscar</button>
          </form>


<?php

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  $valor = $_POST["valor"];
			}
			
			require_once "assets/db2.php";
			
			/*
			echo "<br>";
			echo "antes de";
			echo "<br>";
			*/
			if (mysqli_num_rows($result) > 0) {
			
			  while($row = mysqli_fetch_assoc($result)) {
			
				  $field1 = $row["field1"];
				  $field2 = $row["field2"];
				  $field3 = $row["field3"];
				  $field4 = $row["field4"];
				  $field5 = $row["field5"];
				  $field6 = $row["field6"];
				  $field7 = $row["field7"];
				  $field8 = $row["field8"];
				  $field9 = $row["field9"];
				  $field10 = $row["field10"];
				  $field11 = $row["field11"];
				  $field12 = $row["field12"];
				  $field13 = $row["field13"];
				  $field14 = $row["field14"];
				  $field15 = $row["field15"];
				  $field16 = $row["field16"];
				  $field17 = $row["field17"];          
			
			
			  }
			} else {
			  echo "<tr><td colspan='4'><h3>No hay información correspondiente al certificado:  $valor; verifique el número de certificado o comuníquese con nuestras oficinas para aclaración al respecto.</h3></td></tr>";
			
			}
			
			
			/*
			echo "</table>";
			echo "<br>";
			echo "despues de";
			echo "<br>";
			*/
?>
			

</div>
<br>
<h1> Nos disculpamos por no ofrecer un formato estético de la información, estamos trabajando en ello para su beneficio</h1>
<br>
<br>
<b>Nro Certificado: </b> <?php echo $field1; ?> <br>
<b>Fecha de Expedición: </b> <?php echo $field2; ?> <br>
<b>Organismo: </b> <?php echo $field3; ?> <br>
<b>Fecha de Inspección: </b> <?php echo $field4; ?> <br>
<b>Nombre del Proyecto: </b> <?php echo $field5; ?> <br>
<b>Dirección de Instalación: </b> <?php echo $field6; ?> <br>
<b>Municipio: </b> <?php echo $field7; ?> <br>
<b>Propietario de la instalación: </b> <?php echo $field8; ?> <br>
<b>Fecha de Finalización Construcción: </b> <?php echo $field9; ?> <br>
<b>Tipo de Dictamen: </b> <?php echo $field10; ?> <br>
<b>Tipo de Instalación: </b> <?php echo $field11; ?> <br>
<b>Nombre del Inspector: </b> <?php echo $field12; ?> <br>
<b>Nombre del Declarante: </b> <?php echo $field13; ?> <br>
<b>Nombre del diseñador: </b> <?php echo $field14; ?> <br>
<b>Alcance: </b> <?php echo $field15; ?> <br>
<b>Resultado: </b> <?php echo $field16; ?> <br>
<b>Motivo NA: </b> <?php echo $field17; ?> <br>
</div>












		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
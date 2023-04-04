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
	
	 <body class="is-preload"> 
	 <form method="POST" action="">
            
			<!--<button type="submit" name="enviar">Buscar</button> -->
		  <ul class="actions stacked small">
			  <input type="text" name="valor">
			  <li><a type="submit" name="enviar" class="button primary small">Buscar</a></li>
				  <!-- <li><a href="#" class="button small">Buscar</a></li> -->
		  </ul>
		</form>

		<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $valor = $_POST["valor"];
}

$mi_variable = "Hola mundo!";
echo "El valor de mi_variable es: " . $mi_variable;
require_once "assets/db2.php";



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


?>

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














		<!-- Page Wrapper -->
			<div id="page-wrapper">



				
			</div>

<br>
<br>
<br>







<h3 class="major"></h3>


<h3 class="major">Form</h3>
										<form method="post" action="#">
											<div class="row gtr-uniform">
												<div ></div>
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Nro Certificado</label>
													<input type="text" name="demo-name" id="demo-name" value="<?php echo $field1;?>" readonly />
												</div>
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Fecha de Expedición:</label>
													<input type="text" name="demo-name" id="demo-name" value="" />
												</div>
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Organismo:</label>
													<input type="text" name="demo-name" id="demo-name" value="" />
												</div>
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Resultado:</label>
													<input type="text" name="demo-name" id="demo-name" value="" />
												</div>										
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Motivo de NA:</label>
													<input type="text" name="demo-name" id="demo-name" value="" />
												</div>	
												<br>
												<div></div>
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Fecha de Inspección:</label>
													<input type="text" name="demo-name" id="demo-name" value="" />
												</div>
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Nombre del Proyecto:</label>
													<input type="text" name="demo-name" id="demo-name" value="" />
												</div>
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Dirección de Instalación:</label>
													<input type="text" name="demo-name" id="demo-name" value="" />
												</div>
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Municipio:</label>
													<input type="text" name="demo-name" id="demo-name" value="" />
												</div>
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Propietario de la instalación:</label>
													<input type="text" name="demo-name" id="demo-name" value="" />
												</div>
												<div class="col-2 col-12-xsmall"> </div>
												<div></div>
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Fecha de Finalización Construcción:</label>
													<input type="text" name="demo-name" id="demo-name" value="" />
												</div>
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Tipo de Dictamen:</label>
													<input type="text" name="demo-name" id="demo-name" value="" />
												</div>
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Tipo de Instalación:</label>
													<input type="text" name="demo-name" id="demo-name" value="" />
												</div>
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Nombre del Inspector:</label>
													<input type="text" name="demo-name" id="demo-name" value="" />
												</div>		
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Nombre del Declarante:</label>
													<input type="text" name="demo-name" id="demo-name" value="" />
												</div>										
												<div class="col-2 col-12-xsmall">
													<label for="demo-name">Nombre del Diseñador:</label>
													<input type="text" name="demo-name" id="demo-name" value="" />
												</div>	
												<div class="col-12 ">
												<div class="col-8">
													<label for="demo-message">Alcance</label>
													<textarea name="demo-message" id="demo-message" rows="6"></textarea>
												</div>

											</div>
										</form>

										<br>


</div>

</div>













		
		<!-- Scripts 
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
		-->

	</body>




			
</html>
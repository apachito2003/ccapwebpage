<?php

$servername = "204.93.169.118";
$username = "juandimo_read";
$password = "ccap1801";
$dbname = "juandimo_ccap2022";

$conn = new mysqli($servername, $username, $password, $dbname);
//echo $valor;
/*$valor = "FIN-08-37179";
echo "<br>";
echo $valor;
echo "<br>";
*/
if ($conn->connect_error) {
  die("Conexión a BD fallida: " . $conn->connect_error);
}

/*$sql = "SELECT * FROM dictamenes WHERE numeroDictamen = '$valor'";
$sql = "SELECT * from dictamenes where numeroDictamen = '" . $valor . "' "; 
$resultado = $conn->query($sql);
*/

$sql = "select 
numeroDictamen as field1, 
fechaEmision as field2,
organismo as field3,
fechaPrimInspeccion as field4,
nombreProyecto as field5,
direccionInstalacion as field6, 
Municipio as field7,
propietarioInsta as field8,
fechaFinConstruccion as field9,
tipoDictamen as field10,
tipoInstalacion as field11, 
nombreInspector as field12, 
nombreDeclarante as field13, 
nombreDisenador as field14, 
alcance as field15,
resultado as field16,
motivoNA as field17 
from dictamenes where numeroDictamen = '" . $valor . "' ";



$result = mysqli_query($conn, $sql);



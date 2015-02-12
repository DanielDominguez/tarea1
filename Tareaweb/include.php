<?php
//Datos para conexión//
include "coneccion.php";

$query = "SELECT * FROM idUsuario ORDER BY idUsuario ASC";
$resultQuery = mysqli_query($con,$query);

	while ($row = mysqli_fetch_array($resultQuery)) {
	 	echo $row["idUsuario"]." ".$row["codigo"]." ".$row["nombre"];
	 	echo "<br />";
 	}
?>
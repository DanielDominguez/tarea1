<?php 
	include_once 'coneccion.php';
	$query = "SELECT * FROM cursos ORDER BY idCurso ASC";
	$resultQuery = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="consultamaterias.php" method="post">
		<select name="materia">
		<?php
			   while ($row = mysqli_fetch_array($resultQuery)) {  
					echo "<option value='".$row['idCurso']."'>".$row['nombre_curso'] ."</option>";
				}
			?>

		</select>
		<input type="submit" value="Enviar">

</body>
</html>
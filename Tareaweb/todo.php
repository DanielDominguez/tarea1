<?php 
	include 'coneccion.php';
		$idMateria=$_POST['materia'];
	

		$selectJoin = "SELECT idusuario.nombre, idusuario.apellidos,cursos.nombre_curso FROM idusuario 
			INNER JOIN estudiante_curso ON idusuario.idUsuario = estudiante_curso.idUsuario
			INNER JOIN cursos            ON cursos.idCurso        = estudiante_curso.idCurso WHERE cursos.idCurso=$idMateria";
		$resultQueryJoin = mysqli_query($con,$selectJoin);
		while ($row = mysqli_fetch_array($resultQueryJoin)) {
	 		echo $row["nombre"]." ".$row["apellidos"]." ".$row["nombre_curso"];
	 		echo "<br />";
 		}
			
 ?>
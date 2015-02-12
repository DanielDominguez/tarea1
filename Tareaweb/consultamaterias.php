<?php

include 'coneccion.php';

$idMateria = $_POST['materia'];


		$selectJoin = "SELECT estudiante_curso.idUsuario_curso, estudiante_curso.idUsuario, estudiante_curso.idCurso, cursos.nombre_curso FROM estudiate_curso
			INNER JOIN estudiante_curso ON idusuario.idUsuario = idusuario.idUsuario
			INNER JOIN cursos            ON cursos.idCurso        = estudiante_cursos.idCurso WHERE cursos.idCurso=$idMateria";
		$resultQueryJoin = mysqli_query($con,$selectJoin);

		while ($row = mysqli_fetch_array($resultQueryJoin)) {   // Profe me tiro un error en esta linea que de verdad no pude saber como resolverlo, se que estoy llamando algo mal en el select join pero no lo encuentro...

	 		echo "  
				<form action='notas.php' method='post'>
					<select name='usuario'>
						<option value='".$row['idUsuario']."'>".$row['idUsuario'] ."</option>
					</select>"
					
					." ".
					$row["nombre"]." ".$row["apellidos"]
					." ".
				
					"<select name='materia'>
						<option value='".$idMateria."'>".$row['nombre_curso'] ."</option>
					</select>"
					
					." ".
					
					"<input type='submit' value='Ver notas'>
				</form>
			"
			;
 		}

?>
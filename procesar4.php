<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nota1 = $_POST['nota1'];
	$nota2 = $_POST['nota2'];
	$nota3 = $_POST['nota3'];

	$promedio = ($nota1 + $nota2 + $nota3) / 3;

	if ($promedio >= 13) {
		echo '<p>El alumno ha aprobado con un promedio de ' . round($promedio, 2) . '</p>';
	} else {
		echo '<p>El alumno ha reprobado con un promedio de ' . round($promedio, 2) . '</p>';
	}
}
// Agregar un botón "Atras"
echo "<br><br><a href='ejercicio3.html' class='btn btn-primary'>Atras</a>";
?>

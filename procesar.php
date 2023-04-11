<?php
// Obtener los valores ingresados por el usuario
$nombre = $_POST['nombre'];
$email = $_POST['email'];

// Validar que se hayan ingresado los datos
if(empty($nombre) || empty($email)) {
	echo "Por favor ingrese su nombre y correo electrónico.";
	exit;
}

// Mostrar los datos ingresados por el usuario
echo "El usuario $nombre con correo electrónico $email ha sido registrado correctamente.";

// Agregar un botón "Siguiente"
echo "<br><br><a href='bienvenidos.html' class='btn btn-primary'>Siguiente</a>";
?>

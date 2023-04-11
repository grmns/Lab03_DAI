<?php
// Obtener los valores ingresados por el usuario
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$num4 = $_POST['num4'];

// Calcular la suma de los dos primeros números y el producto del tercer y cuarto número
$suma = $num1 + $num2;
$producto = $num3 * $num4;

// Mostrar los resultados
echo "La suma de $num1 y $num2 es: $suma<br>";
echo "El producto de $num3 y $num4 es: $producto";

// Agregar un botón "Atras"
echo "<br><br><a href='ejercicio1.html' class='btn btn-primary'>Atras</a>";
?>

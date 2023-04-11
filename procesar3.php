<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num2 != 0) {
        if ($num1 > $num2) {
            $suma = $num1 + $num2;
            $resta = $num1 - $num2;
            echo "<p>La suma de los dos números es: $suma</p>";
            echo "<p>La diferencia entre los dos números es: $resta</p>";
        } else {
            $producto = $num1 * $num2;
            $division = $num1 / $num2;
            echo "<p>El producto de los dos números es: $producto</p>";
            echo "<p>La división del primer número respecto al segundo es: $division</p>";
        }
    } else {
        echo "<p>El segundo número no puede ser cero.</p>";
    }
}
// Agregar un botón "Atras"
echo "<br><br><a href='ejercicio2.html' class='btn btn-primary'>Atras</a>";
?>

<?php

    // Obtenemos los números ingresados por el usuario
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    // Comparamos los números para obtener el mayor
    if ($num1 > $num2 && $num1 > $num3) {
        $mayor = $num1;
    } elseif ($num2 > $num3) {
        $mayor = $num2;
    } else {
        $mayor = $num3;
    }

    // Mostramos el resultado en la página
    echo "<p>El número mayor es: " . $mayor . "</p>";

    // Agregamos el botón para regresar a la página anterior
    echo '<a href="ejercicio4.html" class="btn btn-primary">Atras</a>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de comparación</title>
</head>

<body>
    <?php

    $var1 = 8;
    $var2 = "8";
    $var3 = "Pepe";
    $var4 = "Pepe";

    /* Caso 1: Compara valores, en este caso es igual porque el valor es 8 en ambas variables. */
    if ($var1 == $var2) {
        echo "Son iguales. <br>";
    } else {
        echo "Son distintos. <br>";
    }

    /* Caso 2: Compara valores, en este caso NO es igual porque el valor es 8 y Pepe. */
    if ($var1 == $var3) {
        echo "Son iguales. <br>";
    } else {
        echo "Son distintos. <br>";
    }

    /* Caso 3: Compara valores y tipo, en este caso es NO igual porque aunque el valor es 8 en ambas variables, el tipo es diferente (int y string). */
    if ($var1 === $var2) {
        echo "Son iguales. Mismo valor y mismo tipo. <br>";
    } else {
        echo "Son distintos. <br>";
    }

    /* Caso 4: Compara solo los valores, no el tipo. En este caso son diferentes */
    if ($var1 != $var3) {
        echo "Son diferentes. <br>";
    } else {
        echo "No son diferentes. <br>";
    }


    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle for</title>
</head>

<body>

    <?php

    /*     for ($i = 0; $i <= 10; $i++) {
        echo "Estamos en el bucle for en la iteración número $i <br>";
    }

    echo "<br>";

    for ($i = 10; $i >= 0; $i--) {
        echo "Estamos en el bucle for en la iteración número $i <br>";
    }

    echo "<br>";

    for ($i = 0; $i <= 20; $i += 2) {
        echo "Estamos en el bucle for en la iteración número $i <br>";

        if ($i == 6) {
            echo "Bucle interrumpido <br>";
            break;
        }
    } */

    /* Tabla del 9 */

    for ($i = 0; $i <= 10; $i++) {
        echo "9 x $i = " . 9 * $i . "<br>";
    }

    for ($i = 10; $i >= -10; $i--) {

if($i == 0){
    echo "Error. INDETERMINACIÓN. La división entre cero no es posible.<br>";
    continue; //Con esta línea obligamos al bucle a seguir.
}

        echo "9 / $i = " . 9 / $i . "<br>";
    }


    ?>

</body>

</html>
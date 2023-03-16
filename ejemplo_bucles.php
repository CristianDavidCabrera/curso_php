<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle while y do-while</title>
</head>

<body>

    <?php
    /***************/
    /* Bucle while */ /* Solo se ejecuta si la condición del while se cumple */
    /***************/

    $var1 = 1;

    while ($var1 < 6) {

        echo "Estamos dentro del bucle while $var1 <br>";
        $var1++;
    }
    echo "Hemos salido del bucle <br> <br>";

    /******************/
    /* Bucle do-while */ /* Se ejecuta al menos una vez, y luego mientras la condicion del while se cumpla */
    /******************/

    $var2 = 1;
    do {
        echo "Estamos dentro del bucle do-while $var2 <br>";
        $var2++;
    } while ($var2 < 6);
    echo "Hemos salido del bucle do-while <br><br>";

    ?>

</body>

</html>
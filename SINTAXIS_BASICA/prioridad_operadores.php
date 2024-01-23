<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prioridad Operadores</title>
</head>

<body>

    <?php

    $var1 = true;
    $var2 = false;
    $resultado = $var1 && $var2; // Esto es falso. el resultado almacena la operación Y lógica.(True Y False) = false;

    if ($resultado == true) {
        echo "El resultado es true <br>";
    } else {
        echo "El resultado es false <br>";
    }


    $resultado = $var1 and $var2; // Esto es verdadero. 

    /* La variable $resultado almacena el valor de $var1 y luego hace la operación de Y lógica. 
    Esto es debido a la prioridad. El operador = es tiene mayor prioridad que el operador AND. */

    if ($resultado == true) {
        echo "El resultado es true <br>";
    } else {
        echo "El resultado es false <br>";
    }

    ?>


</body>

</html>
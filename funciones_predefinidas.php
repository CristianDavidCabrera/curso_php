<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones predefinidas</title>
</head>

<body>

    <?php

    $palabra = "Pepe";
    echo ($palabra) . "<br>";
    echo (strtolower($palabra)) . "<br>";
    echo (strtoupper($palabra)) . "<br>";


    function suma($num1, $num2)
    {
        $resultado = $num1 + $num2;
        return $resultado;
    }

    echo("El resultado de la suma es " . suma(5,7));


    ?>

</body>

</html>
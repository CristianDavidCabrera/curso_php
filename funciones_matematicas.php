<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones matemáticas</title>
</head>

<body>

    <?php

    $numero = rand(); //La función rand() arroja un numero aleatorio
    echo "El numero aleatorio es: $numero <br>";

    $numero = rand(0, 10); //La función rand() arroja un numero aleatorio (entre 0 y 10)
    echo "El numero aleatorio es: $numero <br>";

    $numero = pow(5, 3); //La función pow() es para realizar potencias.
    echo "El resultado de la potencia es: $numero <br>";

    $numero = 5.49;
    echo "El número es $numero y su redondeo es: " . round($numero) . "<br>"; //La función round() es para redondear.

    $numero = 5.721980;
    echo "El número es $numero y su redondeo con dos decimales es: " . round($numero, 2) . "<br>";



    $numero2 = 3;    // Integer. PHP asume de manera dinámica que en este caso la variable $numero2 es de tipo Integer.
    $numero2 = 3.75; // Float. PHP asume de manera dinámica que en este caso la variable $numero2 es de tipo Float.
    $numero2 = "3";  // String. PHP asume de manera dinámica que en este caso la variable $numero2 es de tipo String.

    /*****************************************************************************************************************************/
    /*                                            Casting implicito                                                              */
    /*****************************************************************************************************************************/
    $numero2 = "3"; //Aquí la variable es tipo string.
    echo "La variable $numero2 es de tipo " . gettype($numero2) . "<br>";

    $numero2 += 2; /* Aquí, tras incrementar la variable en 2, el tipo de la variable pasa de string a integer 
                    y a partir de aquí PHP interpreta que siempre es integer.*/ /* Casting implicito */
    echo "La variable $numero2 es de tipo " . gettype($numero2) . "<br>";

    $numero2 += 7.75; // Ahora es de tipo double.
    echo "La variable $numero2 es de tipo " . gettype($numero2) . "<br>";

    /*****************************************************************************************************************************/
    /*                                            Casting Explicito                                                              */
    /*****************************************************************************************************************************/

    $num3 = "7"; //tipo string
    echo "La variable $num3 es de tipo " . gettype($num3) . "<br>";
    $resultado = (int)$num3; //casting explicito. tipo integer.
    echo "La variable $resultado de tipo " . gettype($resultado) . "<br>";

    ?>

</body>

</html>
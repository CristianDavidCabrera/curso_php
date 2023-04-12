<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parametros por referencia</title>
</head>

<body>
    <?php
    /***************************************/
    /*  Ejemplo cuando valor1 es un valor  */
    /***************************************/
    function incrementarValor($valor1)
    {
        $valor1++;
        return $valor1;
    }

    $numero = 5;
    echo("Parámertros por valor <br>");
    echo incrementarValor($numero) . "<br>";  // esto debe ser 6
    echo $numero . "<br> <br>";               // esto debe ser 5


    /*********************************************/
    /*  Ejemplo cuando valor1 es una refernecia  */
    /*********************************************/
    function incrementarReferencia(&$valor1)
    {
        $valor1++;
        return $valor1;
    }

    $numero = 5;
    echo("Parámetros por referencia <br>");
    echo incrementarReferencia($numero) . "<br>";  // esto debe ser 6
    echo $numero . "<br>";                         // esto debe ser 6


    ?>
</body>

</html>
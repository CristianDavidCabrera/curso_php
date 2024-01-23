<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable estática</title>
</head>

<body>

    <?php
        /* Cuando queremos que una variable conserve su valor fuera de su ámbito, la podemos declarar como estática (static) */

        function incrementaVariable()
        {
            static $contador = 0; /* Al contrario de una variable local, una variable estática (static) conserva su valor una vez termina la función */
            $contador++;
            echo $contador . "<br>";
        }

        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
        incrementaVariable();


    ?>





</body>

</html>
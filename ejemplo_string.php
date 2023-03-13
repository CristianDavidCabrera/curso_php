<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>

    <style>
        .resaltar {
            color: red;
            font-weight: bold;
        }
    </style>

</head>

<body>

    <?php

        echo "<p class='resaltar'>Esto es un ejemplo para usar las comillas simples o el apóstrofe.</p>";
        /* No se puede usar comillas dobles (") dentro de comillas dobles. 
            En caso necesario utilizaremos las comillas simples dentro de las dobles como en párrafo del ejemplo. 
            O comillas dobles dentro de comillas simples, es decir, 
            NO PUEDEN HABER COMILLAS HIJAS Y PADRES DEL MISMO TIPO */

        echo "<p class=\"resaltar \"> Esto es un ejemplo de como escapar las comillas dobles para poder usarlas como hijos y padres </p>";
        /* Para escapar se utiliza la barra invertida \ */

    ?>

    <?php

        $var1 = "casa";
        $var2 = "CASA";

        $resultado = strcmp($var1, $var2); /* Devuelve 1 si NO son iguales, Devuelve 0 si SÍ son iguales. 
                                              Esta función SI DIFERENCIA entre mayúsculas y minúsculas.  */
        echo "El resultado es $resultado <br>";

        if (!$resultado){
            echo "Sí coinciden <br>";
        }else{
            echo "No coinciden <br>";
        }
        
        $resultado = strcasecmp($var1, $var2); /* Devuelve 1 si NO son iguales, Devuelve 0 si SÍ son iguales. 
                                              Esta función NO DIFERENCIA entre mayúsculas y minúsculas.  */
        echo "El resultado es $resultado <br>";

        if (!$resultado){
            echo "Sí coinciden <br>";
        }else{
            echo "No coinciden <br>";
        }



    ?>

</body>

</html>
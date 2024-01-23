<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays multidimensionales</title>
</head>

<body>
    <?php

        /* Declaración de array asociativo multidimensional */
        $alimentos = array(
            "fruta" => array(
                "tropical" => "kiwi",
                "citrico" => "mandarina",
                "otros" => "manzana"
            ),
            "leche" => array(
                "animal" => "vaca",
                "vegetal" => "coco"
            ),
            "carne" => array(
                "vacuno" => "lomo",
                "porcino" => "pata"
            )
        );

        /* Como acceder a un elemento. Ejemplo: acceder al elemento lomo */
        /*  echo($alimentos["carne"]["vacuno"]); */

        /* Como recorrer todo el array multidimensional. */

        foreach ($alimentos as $clave_alim => $alim) { //recorremos primera dimensión.
            echo "$clave_alim: <br>";

            foreach ($alim as $clave => $valor) { //recorremos segunda dimensión. 
                echo "$clave=$valor <br>";
            }
            echo "<br>";
        }

        /* funcion var_dump. Se suele utilizar para depurar el código. Se imprimen en pantalla todos los elementos de un array. */
        echo var_dump($alimentos);

    ?>
</body>

</html>
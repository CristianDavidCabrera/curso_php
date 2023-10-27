<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays multidimensionales</title>
</head>

<body>
    <?php

        /* Declaración de array multidimensional */
        $alimento = array(
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

        echo($alimento["carne"]["vacuno"]);

    ?>
</body>

</html>
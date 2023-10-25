<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays PHP</title>
</head>

<body>

    <?php

    /* ARRAYS INDEXADOS */
    /* PHP permite no poner el indice a la hora de declarar los arrays */
    /* Existen varias formas de sintaxis para la creación de arrays */
        $entreSemana[] = "Lunes"; //declaración de array, indice 0, valor "Lunes"
        $entreSemana[] = "Martes"; //declaración de array, indice 1, valor "Martes"
        $entreSemana[] = "Miércoles"; //declaración de array, indice 2, valor "Miercoles"

        $entreSemana[3] = "Jueves"; //declaración de array, indice 3, valor "Jueves"
        $entreSemana[4] = "Viernes"; //declaración de array, indice 4, valor "Viernes"

        $finDeSemana=array("Sábado", "Domingo"); //declaración de array 

        echo $entreSemana[2] . "<br>"; // imprime por pantalla la posición 1, es decir el indice 0.
        echo $finDeSemana[0] . "<br>";

    ?>

</body>

</html>
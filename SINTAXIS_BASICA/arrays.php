<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays PHP</title>
</head>

<body>

    <?php
        /*********************************/
        /*     ARRAYS INDEXADOS          */
        /*********************************/
        /* PHP permite no poner el indice a la hora de declarar los arrays */
        /* Existen varias formas de sintaxis para la creación de arrays */

        $entreSemana[] = "Lunes"; //declaración de array, indice 0, valor "Lunes"
        $entreSemana[] = "Martes"; //declaración de array, indice 1, valor "Martes"
        $entreSemana[] = "Miércoles"; //declaración de array, indice 2, valor "Miercoles"

        $entreSemana[3] = "Jueves"; //declaración de array, indice 3, valor "Jueves"
        $entreSemana[4] = "Viernes"; //declaración de array, indice 4, valor "Viernes"

        $finDeSemana = array("Sábado", "Domingo"); //declaración de array 

        echo $entreSemana[2] . "<br>"; // imprime por pantalla la posición 1, es decir el indice 0.
        echo $finDeSemana[0] . "<br>";


        /* Como recorrer un array indexado. Se utiliza un bucle for */
        for ($i = 0; $i < 5; $i++) {
            echo ($entreSemana[$i] . "<br>");
        }

        /* Como añadir un elemento más al array indexado. */
        $entreSemana[] = "Sábado";
        /* Ordenar los elementos del array alfabéticamente, se utiliza la función predefinida sort() */
        echo("utilizamos las función sort para ordenar alfabeticamente <br><br>");
        sort($entreSemana);

        /* Como recorrrer un array indexado cuando no conocemos exactamente cuantos elementos tiene. Utilizando la función predefinida count */
        for ($i = 0; $i < count($entreSemana); $i++) {
            echo ($entreSemana[$i] . "<br>");
        }


        /**************************************/
        /* ARRAYS ASOCIATIVOS O NO INDEXADOS  */
        /**************************************/
        //declaración de array asociativo.
        $datos = array("Nombre" => "José", "Apellido" => "Rodriguez", "Edad" => 50);
        echo $datos["Nombre"] . "<br>"; //Imprime por pantalla la posición Nombre. Es decir el valor José.
        /*  $datos ="Juanito"; */

        /* Como añadir un elemento más a un array asociativo */
        $datos["País"] = "España";


        //la función predefinida is_array es una función booleana que sirve para comprobar si el parámetro introducido es o no es un array.
        if (is_array($datos) == true) {
            echo ("Es un array <br>");
        } else {
            echo ("No es un array <br>");
        }

        /* Como recorrer un array de tipo asociativo. Se utiliza el bucle foreach */
        foreach ($datos as $clave => $valor) {
            echo "A $clave le corresponde $valor <br>";
        }
     

    ?>

</body>

</html>
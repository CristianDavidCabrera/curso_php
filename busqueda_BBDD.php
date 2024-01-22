<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion BBDD</title>

    <style>
        table {
            width: 50%;
            border: 1px dotted red;
            margin: auto;
        }
    </style>

</head>

<body>
    <?php

    require("datos_conexion.php");

    /* -------------------------------------------------------- */
    /* Conexion a base de datos por procedimientos o funciones */
    /* -------------------------------------------------------- */

    $conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre); /* ABRIMOS conexión con la base de datos "pruebas"  */

    /* -------------------------------------------------------- */
    /* Filtros con clausa where                                 */
    /* -------------------------------------------------------- */


    $query = "SELECT * FROM vehiculos where itv='falso'"; //filtro
    $resultados = mysqli_query($conexion, $query); //resulset

    while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) { /* Búsqueda. Declaracion de Array asociativo. */

        echo "<table><tr><td>";
        echo $fila['MATRICULA'] . "</td><td> ";                    /* Muestra por pantalla el registro */
        echo $fila['TIPO'] . "</td><td> ";
        echo $fila['MARCA'] . "</td><td>";
        echo $fila['IMPORTE'] . "</td><td>";
        echo $fila['FECHA DE COMPRA'] . "</td><td>";
        echo $fila['ITV'] . "</td><td>";
        echo $fila['COLOR'] . "</td><td></tr></table>";
        echo "<br>";
    }

    mysqli_close($conexion); /* CERRAMOS conexión con la base de datos "pruebas"  */


    ?>

</body>

</html>
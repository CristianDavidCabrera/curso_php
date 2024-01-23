<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            border: 1px dotted red;
            margin: auto;
        }
    </style>


    <?php

    function ejecuta_consulta($labusqueda)
    {

        /* ------------------------------------------------------- */
        /*      Parámetros de conexion a base de datos              */
        /* -------------------------------------------------------- */

        require("datos_conexion.php");

        /* -------------------------------------------------------- */
        /*      Abrimos Conexion a base de datos                    */
        /* -------------------------------------------------------- */

        $conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);

        /* ------------------------------------------------------- */
        /*      Filtros de busqueda o consulta                     */
        /* --------------------------------------------------------*/

        $query = "SELECT * FROM vehiculos where matricula like '%$labusqueda%'"; //filtro de busqueda con comodines. Paso el parámetro de la función $labusqueda. 
        $resultados = mysqli_query($conexion, $query); //resulset

        while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) { /* Búsqueda. Declaracion de Array asociativo. */

            echo "<table><tr><td>";
            echo $fila['MATRICULA'] . "</td><td> ";                    /* Muestra por pantalla el registro */
            echo $fila['TIPO'] . "</td><td> ";
            echo $fila['MARCA'] . "</td><td>";
            echo $fila['IMPORTE'] . "</td><td>";
            echo $fila['FECHACOMPRA'] . "</td><td>";
            echo $fila['ITV'] . "</td><td>";
            echo $fila['COLOR'] . "</td><td></tr></table>";
            echo "<br>";
        }

        /* -------------------------------------------------------- */
        /*      Cerramos conexion a base de datos                   */
        /* -------------------------------------------------------- */

        mysqli_close($conexion);
    }

    ?>


</head>

<body>
    <?php

        $mibusqueda = $_GET["buscar"]; /* buscar es un objeto html*/
        $miweb = $_SERVER["PHP_SELF"];
        /* La función $_SERVER[] indica la página del servidor a la que tiene que llamar. */
        /* El parámetro PHP_SELF, indica que la pagina a la que tiene que llamar es a ella misma. */

        if($mibusqueda != NULL){ /* En la primera iteración, encontrará el formulario vacío por lo que no lo enviará y presentará el formulario que hay en el else */
            ejecuta_consulta($mibusqueda);

        }else{ 
            echo("<form action='" . $miweb . "' method='get'>
            <label>Buscar:<input type='text' name='buscar'></label>
            <input type='submit' name='enviando' value='Dale!'>
            </form>");
        }


    ?>


</body>

</html>
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

       // $query = "SELECT * FROM PRODUCTOS where CÓDIGOARTÍCULO like '%$labusqueda%'"; //filtro de busqueda con comodines. Paso el parámetro de la función $labusqueda. 
        
       $query = "SELECT * FROM PRODUCTOS where NOMBREARTÍCULO = '$labusqueda'"; 
       echo "$query <br><br>";
        $resultados = mysqli_query($conexion, $query); //resulset

        while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) { /* Búsqueda. Declaracion de Array asociativo. */

            echo "<table><tr><td>";
            echo $fila['CÓDIGOARTÍCULO'] . "</td><td> ";                    /* Muestra por pantalla el registro */
            echo $fila['NOMBREARTÍCULO'] . "</td><td> ";
            echo $fila['SECCIÓN'] . "</td><td>";
            echo $fila['IMPORTADO'] . "</td><td>";
            echo $fila['PRECIO'] . "</td><td>";
            echo $fila['PAÍSDEORIGEN'] . "</td><td></tr></table>";
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
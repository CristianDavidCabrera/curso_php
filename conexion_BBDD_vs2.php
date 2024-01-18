<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion BBDD</title>

<style> 
    table{
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

        $conexion=mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre); /* ABRIMOS conexión con la base de datos "pruebas"  */

        /* -------------------------------------------------------- */
        /* Filtros con clausa where                                 */
        /* -------------------------------------------------------- */

    
        $query="SELECT * FROM vehiculos where itv='falso'"; //filtramos la tabla vehiculos para que nos muestre los que tienen en el campo itv el valor falso
        $resultados=mysqli_query($conexion,$query); /* Tabla virtual donde se almacena toda la info de la query. */

        while($fila=mysqli_fetch_row($resultados)){ /* Recorre línea a línea la info que hay en la tabla virtual llamada resultset o recordset) */

            echo "<table><tr><td>";
            echo $fila[0] . "</td><td> ";                    /* Muestra por pantalla el registro */
            echo $fila[1] . "</td><td> ";
            echo $fila[2] . "</td><td> ";
            echo $fila[3] . "</td><td> ";
            echo $fila[4] . "</td><td> ";
            echo $fila[5] . "</td><td> ";
            echo $fila[6] . "</td><td></table>";
            echo "<br>";
        }

        mysqli_close($conexion); /* CERRAMOS conexión con la base de datos "pruebas"  */


    ?>
    
</body>
</html>
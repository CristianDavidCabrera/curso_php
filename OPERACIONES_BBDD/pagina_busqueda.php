<?php

    $busqueda=$_GET["buscar"]; //guardamos en esta variable lo que ha introducido el usuario en el cuadro de texto de busqueda (en el formulario de busqueda)


    require("datos_conexion.php");

        /* -------------------------------------------------------- */
        /* Conexion a base de datos por procedimientos o funciones */
        /* -------------------------------------------------------- */

        $conexion=mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre); /* ABRIMOS conexión con la base de datos "pruebas"  */

        /* -------------------------------------------------------- */
        /* Filtros con clausa where                                 */
        /* -------------------------------------------------------- */

    
        $query="SELECT * FROM vehiculos where matricula like '%$busqueda%'"; //filtro de busqueda con comodines 
        $resultados=mysqli_query($conexion,$query); //resulset

        while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){ /* Búsqueda. Declaracion de Array asociativo. */

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

        mysqli_close($conexion); /* CERRAMOS conexión con la base de datos "pruebas"  */


?>
    
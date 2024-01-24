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

    
        $consulta="SELECT * FROM productos where NOMBREARTÍCULO like '%$busqueda%'"; //filtro de busqueda con comodines 
        $resultados=mysqli_query($conexion,$consulta); //resulset

        while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){ /* Búsqueda. Declaracion de Array asociativo. */

            //echo "<table><tr><td>";

            echo"<form action='actualizar_registro.php' method='get'>";

            echo"<input type='text' name='c_art' value='" . $fila['CÓDIGOARTÍCULO'] . "'><br>";
            echo"<input type='text' name='n_art' value='" . $fila['NOMBREARTÍCULO'] . "'><br>";
            echo"<input type='text' name='seccion' value='" . $fila['SECCIÓN'] . "'><br>";
            echo"<input type='text' name='importado' value='" . $fila['IMPORTADO'] . "'><br>";
            echo"<input type='text' name='precio' value='" . $fila['PRECIO'] . "'><br>";
            echo"<input type='text' name='fecha' value='" . $fila['FECHA'] . "'><br>";
            echo"<input type='text' name='p_orig' value='" . $fila['PAÍSDEORIGEN'] . "'><br>";
            echo "<input type='submit' name='enviando' value='actualizar!'>";
            echo "</form>";
        }

        mysqli_close($conexion); /* CERRAMOS conexión con la base de datos "pruebas"  */


?>
    
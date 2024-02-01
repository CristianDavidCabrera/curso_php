<?php

    $usuario=$_GET["user"];
    $password=$_GET["passwd"];

    require("datos_conexion.php");

    /* -------------------------------------------------------- */
    /*      Abrimos Conexion a base de datos                    */
    /* -------------------------------------------------------- */

    $conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);


    /* ------------------------------------------------------- */
    /*   Manejo de error de "no conexion con la base de datos" */
    /* --------------------------------------------------------*/

    if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");

    /* ------------------------------------------------------- */
    /*   Codificacion de caracteres                            */
    /* --------------------------------------------------------*/

    mysqli_set_charset($conexion, "utf8"); //para trabajar con caracteres latinos.



        /* -------------------------------------------------------- */
        /*     LOGIN: pedir usuario y contraseña                    */
        /* -------------------------------------------------------- */

    
        $consulta="SELECT * FROM usuarios where usuario = '$usuario' and contra='$password'"; 
        $resultados=mysqli_query($conexion,$consulta); //resulset

        while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){ /* Búsqueda. Declaracion de Array asociativo. */

            echo "Bienvenido $usuario <br> Estos son tus datos: <br>";

            echo "<table><tr><td>";
            echo $fila['usuario'] . "</td><td> ";                    /* Muestra por pantalla el registro */
            echo $fila['contra'] . "</td><td> ";
            echo $fila['tfno'] . "</td><td>";
            echo $fila['direccion'] . "</td><td></tr></table>";
            echo "<br>";
        }

        mysqli_close($conexion); /* CERRAMOS conexión con la base de datos "pruebas"  */


?>
    
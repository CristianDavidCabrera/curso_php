<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion BBDD</title>
</head>
<body>
    <?php
    
       require("datos_conexion.php");

        /* -------------------------------------------------------- */
        /* Conexion a base de datos por procedimientos o funciones */
        /* -------------------------------------------------------- */

        $conexion=mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre); /* ABRIMOS conexión con la base de datos "pruebas"  */



        // Verificando conexion. Manejo de error en la conexion
        if (!$conexion) {
            die("Connexion fallida: " . mysqli_connect_error());
            }
            echo "Connexion establecida" . "<br>";
     

        $query="SELECT * FROM datospersonales"; /*Seleccionamos toda la info de la tabla "datospersonales" que se encuentra en la bbdd "pruebas" */
        $resultados=mysqli_query($conexion,$query); /* Tabla virtual donde se almacena toda la info de la query. */

        while($fila=mysqli_fetch_row($resultados)){ /* Recorre línea a línea la info que hay en la tabla virtual llamada resultset o recordset) */

            echo $fila[0] . " ";                    /* Muestra por pantalla el registro */
            echo $fila[1] . " ";
            echo $fila[2] . " ";
            echo "<br>";
        }

        mysqli_close($conexion); /* CERRAMOS conexión con la base de datos "pruebas"  */


    ?>
    
</body>
</html>
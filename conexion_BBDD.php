<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion BBDD</title>
</head>
<body>
    <?php
    
        $db_host="localhost";
        $db_nombre="pruebas";
        $db_usuario="root";
        $db_password="";


        /* Por procedimientos */
        $conexion=mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre); /* abrimos conexión con la base de datos "pruebas"*/
        $query="SELECT * FROM datospersonales"; /*Seleccionamos toda la info de la tabla "datospersonales" */
        $resultados=mysqli_query($conexion,$query); /*  Tabla virtual donde se almacena toda la info*/
        $fila=mysqli_fetch_row($resultados); /* Recorre línea a línea la info que hay en la tabla virtual (result o resource o recourse) */

        echo $fila[0] . " ";
        echo $fila[1] . " ";
        echo $fila[2] . " ";


    ?>
    
</body>
</html>
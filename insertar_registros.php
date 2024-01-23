<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar registros</title>
</head>

<body>

    <?php




    /* ------------------------------------------------------- */
    /*      Parámetros de conexion a base de datos              */
    /* -------------------------------------------------------- */

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

    /* ------------------------------------------------------- */
    /*     Insertar registros en la tabla (SQL                 */
    /* --------------------------------------------------------*/

    /*     $consulta = "INSERT INTO vehiculos (MATRICULA, TIPO, MARCA, IMPORTE, FECHA DE COMPRA, ITV, COLOR, FOTO)"; */

    $consulta = "INSERT INTO vehiculos (MATRICULA, TIPO, MARCA, IMPORTE) values ('1039-NNN','FRUGON','VOLSKWAGEN', 55000)";
    $resultados = mysqli_query($conexion, $consulta); //resulset

    
    /* NOTA: En el navagador no va a aparecer nada. 
    Para saber si el registro se ha insertado correctamente hay que ir a PHPmyAdmin y comprobar el 
    último registro de la tabla */

    /* -------------------------------------------------------- */
    /*      Cerramos conexion a base de datos                   */
    /* -------------------------------------------------------- */

    mysqli_close($conexion);



    ?>


</body>

</html>
<?php

$pais = $_GET["buscar"];

require("datos_conexion.php");

$conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);

if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la BBDD";
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
mysqli_set_charset($conexion, "utf8");


/* -------------------------------------------------------- */
/*       1.- CREAMOS SENTENNCIA SQL CON CIRTERIO ?          */
/* -------------------------------------------------------- */

$sql = "SELECT CÓDIGOARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE PAÍSDEORIGEN= ?";

/* ------------------------------------------------------------------------ */
/*       2.- PREPARAMOS LA CONSULTA con la función mysqli_prepare()         */
/* -------------------------------------------------------------------------*/

$resultado = mysqli_prepare($conexion, $sql);

/* ------------------------------------------------------------------------ */
/*       3.- UNIR LOS PARÁMETROS con la función mysqli_stmt_bind_param()    */
/* -------------------------------------------------------------------------*/

$ok = mysqli_stmt_bind_param($resultado, "s", $pais);

/* ------------------------------------------------------------------------ */
/*       4.- EJECUTAR LA CONSULTA con la función mysqli_stmt_execute()      */
/* -------------------------------------------------------------------------*/

$ok = mysqli_stmt_execute($resultado);
if ($ok == false) {
    echo "Error al ejecutar consulta";
} else {
/* ---------------------------------------------------------------------------------------- */
/*       5.- ASOCIAR LAS VARIABLES AL RESULTADO DE LA CONSULTA myysql_stmt_bind_result      */
/* -----------------------------------------------------------------------------------------*/
    $ok=mysqli_stmt_bind_result($resultado,$codigo,$seccion,$precio,$pais);
    echo "Artículos encontrados: <br><br>";

    while(mysqli_stmt_fetch($resultado)){
        echo $codigo . " ". $seccion . " " . $precio . " " . $pais . "<br>";
    }

    mysqli_stmt_close($resultado);
}

mysqli_close($conexion);

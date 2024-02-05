<?php

$c_art = $_GET["c_art"];
$secc = $_GET["secc"];
$n_art = $_GET["n_art"];
$pre = $_GET["pre"];
$imp = $_GET["imp"];
$p_ori = $_GET["p_ori"];

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

$sql = "INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, IMPORTADO, PAÍSDEORIGEN) VALUES (?,?,?,?,?,?)";

/* ------------------------------------------------------------------------ */
/*       2.- PREPARAMOS LA CONSULTA con la función mysqli_prepare()         */
/* -------------------------------------------------------------------------*/

$resultado = mysqli_prepare($conexion, $sql);

/* ------------------------------------------------------------------------ */
/*       3.- UNIR LOS PARÁMETROS con la función mysqli_stmt_bind_param()    */
/* -------------------------------------------------------------------------*/

$ok = mysqli_stmt_bind_param($resultado, "sssiss", $c_art, $secc, $n_art, $pre, $imp, $p_ori);

/* ------------------------------------------------------------------------ */
/*       4.- EJECUTAR LA CONSULTA con la función mysqli_stmt_execute()      */
/* -------------------------------------------------------------------------*/

$ok = mysqli_stmt_execute($resultado);
if ($ok == false) {
    echo "Error al ejecutar consulta";
} else {

    echo "Agregado nuevo registro <br><br>";

    mysqli_stmt_close($resultado);
}

mysqli_close($conexion);

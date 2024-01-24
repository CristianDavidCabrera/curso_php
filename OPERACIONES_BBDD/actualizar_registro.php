<?php

/* -------------------------------------------------------- */
/*     Declaracion de variables: campos del formulario      */
/* -------------------------------------------------------- */

$cod = $_GET["c_art"];
$sec = $_GET["seccion"];
$nom = $_GET["n_art"];
$pre = $_GET["precio"];
$fec = $_GET["fecha"];
$imp = $_GET["importado"];
$por = $_GET["p_orig"];

/* -------------------------------------------------------- */
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
/*     Actualizar registros en la tabla (SQL)              */
/* --------------------------------------------------------*/

$consulta = "UPDATE PRODUCTOS SET CÓDIGOARTÍCULO='$cod', SECCIÓN='$sec', NOMBREARTÍCULO='$nom', PRECIO='$pre' ,FECHA='$fec', IMPORTADO='$imp', PAÍSDEORIGEN='$por' WHERE CÓDIGOARTÍCULO='$cod'";

$resultados = mysqli_query($conexion, $consulta); //resulset


/* ------------------------------------------------------- */
/*     Mostramos resultado del registro                    */
/* --------------------------------------------------------*/
if ($resultados == false) {
    echo "Error en la consulta";
} else {
    echo "Registro guardado <br><br>";
    echo "<table><tr><td>$cod</td></tr>";
    echo "<table><tr><td>$sec</td></tr>";
    echo "<table><tr><td>$nom</td></tr>";
    echo "<table><tr><td>$pre</td></tr>";
    echo "<table><tr><td>$fec</td></tr>";
    echo "<table><tr><td>$imp</td></tr>";
    echo "<table><tr><td>$por</td></tr></table>";
}


/* -------------------------------------------------------- */
/*      Cerramos conexion a base de datos                   */
/* -------------------------------------------------------- */

mysqli_close($conexion);

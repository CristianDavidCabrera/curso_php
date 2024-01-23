<?php

/* -------------------------------------------------------- */
/*     Declaracion de variables: campos del formulario      */
/* -------------------------------------------------------- */

$matricula = $_GET["matricula"];
$tipo = $_GET["tipo"];
$marca = $_GET["marca"];
$importe = $_GET["importe"];
$fechaCompra = $_GET["fechaCompra"];
$itv = $_GET["itv"];
$color = $_GET["color"];


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
/*     Eliminar registros en la tabla (SQL)                */
/* --------------------------------------------------------*/

$consulta = "DELETE FROM vehiculos WHERE MATRICULA='$matricula'";

$resultados = mysqli_query($conexion, $consulta); //resulset


/* ------------------------------------------------------- */
/*     Mostramos resultado del registro                    */
/* --------------------------------------------------------*/
if($resultados==false){
    echo "Error en la consulta";

}else{
    //echo "Registro eliminado <br>";
    //echo mysqli_affected_rows($conexion);
   if (mysqli_affected_rows($conexion) == 0){
    echo "No existe el registro indicado";
   }else if (mysqli_affected_rows($conexion) == 1){
    echo "Se han eliminado " . mysqli_affected_rows($conexion) . " registro";
   }else {
    echo "Se han eliminado " . mysqli_affected_rows($conexion) . " registros";
   }
}


/* -------------------------------------------------------- */
/*      Cerramos conexion a base de datos                   */
/* -------------------------------------------------------- */

mysqli_close($conexion);

?>
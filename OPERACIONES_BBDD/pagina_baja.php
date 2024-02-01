<?php

/* -------------------------------------------------------- */
/*    Establecer datos de conexión con el servidor          */
/* -------------------------------------------------------- */

require("datos_conexion.php");

/* -------------------------------------------------------- */
/*      Abrimos Conexion a base de datos                    */
/* -------------------------------------------------------- */

$conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);

/* -------------------------------------------------------- */
/*      como evitar la INYECCION SQL                        */
/* -------------------------------------------------------- */
/* Para evitar la inyección SQL se utilizan la función mysqli_real_escape_string() o 
la función mysqli_addslashes() */
/* 
$usuario = $_GET["user"];
$password = $_GET["passwd"]; */

$usuario = mysqli_real_escape_string($conexion, $_GET["user"]);
$password = mysqli_real_escape_string($conexion, $_GET["passwd"]);



/* -------------------------------------------------------- */
/*     Manejo de errores en la BBDD                         */
/* -------------------------------------------------------- */
if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la BBDD";
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");

/* -------------------------------------------------------- */
/*      Trabajar con caracteres latinos.                    */
/* -------------------------------------------------------- */

mysqli_set_charset($conexion, "utf8");


/* --------------------------------------------------------------------- */
/*     Pedir login (usuario y contraseña) para ELIMINAR DE LA BBDD       */
/* ----------------------------------------------------------------------*/

$consulta = "DELETE FROM usuarios where usuario = '$usuario' and contra='$password'";

echo "consulta<br><br>";

if (mysqli_query($conexion, $consulta)){
    echo "Baja procesada";
}


/* -------------------------------------------------------- */
/*      CERRAR Conexion con base de datos                   */
/* -------------------------------------------------------- */

mysqli_close($conexion); 

?>

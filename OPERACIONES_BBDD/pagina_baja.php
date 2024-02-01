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
/* Para evitar la inyección SQL se utilizan la función mysqli_real_escape_string() (esta función es mejor) o 
la función mysqli_addslashes(). Además podemos/debemos usar consultas preparadas. */
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

echo "$consulta<br><br>";


/* -------------------------------------------------------- */
/*      MANEJO DE MENSAJES AL USUARIO                       */
/* -------------------------------------------------------- */


/* if (mysqli_query($conexion, $consulta)){
    echo "Baja procesada";
} */


mysqli_query($conexion, $consulta); //ejecutamos la consulta
if(mysqli_affected_rows($conexion)>0){ //comprobamos si ha habido cambios en los registros de la base de datos. 
    echo "Baja procesada";

}else{
    echo "No se ha encontrado registro para eliminar";
}

/* -------------------------------------------------------- */
/*      CERRAR Conexion con base de datos                   */
/* -------------------------------------------------------- */

mysqli_close($conexion); 

?>

<?php

$usuario = $_GET["user"];
$password = $_GET["passwd"];

require("datos_conexion.php");

$conexion = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);

if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la BBDD";
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");

mysqli_set_charset($conexion, "utf8"); //para trabajar con caracteres latinos.


/* -------------------------------------------------------- */
/*     LOGIN: pedir usuario y contraseña                    */
/* -------------------------------------------------------- */

$consulta = "DELETE * FROM usuarios where usuario = '$usuario' and contra='$password'";

echo "consulta<br><br>";

if (mysqli_query($conexion, $consulta)) {
    echo "Baja procesada";
}

mysqli_close($conexion); 

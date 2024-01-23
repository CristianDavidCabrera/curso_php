<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Ambitos</title>
</head>

<body>

    <?php

    $nombre = "Cristian";

    function dameNombre(){
        global $nombre; // La variable global se crea siempre dentro de la función.
        $nombre = "El nombre es " . $nombre;
    }
  /*   include ("datos_otros.php"); */

    dameNombre();

    echo $nombre;


    ?>
</body>

</html>
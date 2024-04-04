<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion PDO</title>
</head>

<body>
    <?php

    /* --------------------------------------- */
    /*          Manejo de excepciones          */
    /* --------------------------------------- */

    try {

        /* ------------------------------- */
        /*          Conexion PDO           */
        /* ------------------------------- */

        $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo 'Conexion OK';
    } catch (Exception $e) {

        die('Error: ' . $e->getMessage());
    } finally {
        $base = null; //vaciar la memoria de la conexión
    }





    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO I</title>
</head>

<body>
    <?php
        include("vehiculos.php");
        $mazda = new Coche();
        $pegaso = new Camion();

        //como acceder a propiedades que están encapsuladas. Métodos Getters y Setters.

        echo("El Mazda tiene " . $mazda->get_ruedas() . " ruedas.<br>");
        echo("El Pegaso tiene " . $pegaso->get_ruedas() . " ruedas.<br>");


    ?>
</body>

</html>
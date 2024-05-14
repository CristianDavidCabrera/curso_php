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

        echo("El Mazda tiene " . $mazda->getRuedas() . " ruedas.<br>");
        echo("El Mazda tiene un motor de " . $mazda->getMotor() . "cc. <br>");
        echo("El Mazda es de color " . $mazda->getColor() . ".<br>");
        echo($mazda->arrancar() . "el Mazda. <br>");
        echo "<br>";
        echo "<br>";
       
        echo "el Pegaso " . $pegaso->frenar() . "<br>";
        echo("El Pegaso tiene " . $pegaso->getRuedas() . " ruedas.<br>");
        echo("El Pegaso tiene un motor de " . $pegaso->getMotor() . "cc <br>");
        echo("El Pegaso es de color " . $pegaso->getColor() . "<br>");
        echo($pegaso->arrancar() . "<br>");

        echo "<br>";
        echo "<br>";
        echo ($pegaso->setColor("Amarillo","Iveco"));

    ?>
</body>

</html>
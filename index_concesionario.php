<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concesionario</title>
</head>

<body>
    <?php
    include('concesionario.php');

    $compra_antonio = new compra_vehiculo("compacto"); //creo objeto de clase compra_vehiculo y paso por parámetro compacto.
    $compra_antonio->climatizador(); //Añadimos climatizador.
    $compra_antonio->tapiceria_cuero("blanco"); //añadimos tapicería de cuero blanco.

    echo $compra_antonio->precio_final();

    $compra_ana = new compra_vehiculo("compacto");
    $compra_ana->climatizador();
    $compra_ana->tapiceria_cuero("rojo");

    echo $compra_ana->precio_final();


    ?>
</body>

</html>
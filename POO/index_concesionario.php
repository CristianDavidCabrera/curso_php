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

    Compra_vehiculo::descuento_gobierno(); //llamamos a metodo estático, para aplicar ayuda descuento del gobierno.

    $compra_antonio = new Compra_vehiculo("compacto"); //creo objeto de clase compra_vehiculo y paso por parámetro el valor "compacto".
    $compra_antonio->climatizador(); //Llamo el método climatizador, añadimos climatizador.
    $compra_antonio->tapiceria_cuero("blanco"); //llamo al metodo tapicería_cuero, añadimos tapicería de cuero y le paso el valor "blanco".
    echo $compra_antonio->precio_final(); //llamo al método precio_final, devuelve precio.

    $compra_ana = new Compra_vehiculo("compacto");
    $compra_ana->climatizador();
    $compra_ana->tapiceria_cuero("rojo");
    echo $compra_ana->precio_final();


    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    echo "Este es el primer mensaje PHP <br>";

    function dameDatos(){ // declaración de función
        echo "Este es el mensaje del interior de la función <br>";
    }

    dameDatos(); //Llamada a la función
    echo "Este es el segundo mensaje PHP <br>";

    //include("entrega_datos.php"); //incluir archivo externo llamado entrega_datos.php

    //dameMasDatos();// llamada a la función dameMasDatos, esta función está definida dentro del archivo incluido entrega_datos.php

    require("entrega_datos.php");
    probandoElRequire();

    ?>

</body>

</html>
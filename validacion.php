<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
    <style>
        .no_validado {
        font-size: 18px;
        color: #F00;
        font-weight: bold;
        }

        .validado {
        font-size: 18px;
        color: #0C3;
        font-weight: bold;
        }
    </style>
</head>

<body>

    <?php

        if (isset($_POST["enviando"])) { /* esta función comprueba si hemos pulsado el botón enviar del formulario  */

            $usuario = $_POST["nombre_usuario"];
            $edad = $_POST["edad_usuario"];

            if ($usuario == "Juan" && $edad >= 18) {
                echo "<p class=\"validado\">Puedes entrar</p>";
            } else {
                echo "<p class=\"no_validado\">No puedes entrar<p>";
            }
        }


    ?>
</body>

</html>
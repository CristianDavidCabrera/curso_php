<style>
    h1 {
        text-align: center;
    }

    table {
        background-color: #FFC;
        padding: 5px;
        border: #666 5px solid;
    }

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

<?php

if (isset($_POST["enviando"])) {

    $nombre = $_POST["nombre_usuario"];
    $edad = $_POST["edad_usuario"];
    $password = $_POST["password_usuario"];

    /*   switch (true) {

        case $nombre == "Juan" && $password == "1234" && $edad >= 18:
            echo "<p class='validado'>Acceso autorizado. Hola Juan.</p>";
            break;

        case $nombre == "María" && $password == "5678":
            echo "<p class='validado'>Acceso autorizado. Hola María.</p>";
            break;

        case $nombre == "Pedro" && $password == "9999":
            echo "<p class='validado'>Acceso autorizado. Hola Pedro.</p>";
            break;

        default:
            echo "<p class='no_validado'>Usuario no autorizado</p>";
    } */


    switch (true) {

        case $edad <= 18:
            echo "<p class='no_validado'>Eres menor de edad</p>";
            break;

        case $edad <= 40:
            echo "<p class='validado'>Eres joven.</p>";
            break;

        case $edad <= 65:
            echo "<p class='validado'>Eres maduro.</p>";
            break;

        case $edad <= 75:
            echo "<p class='validado'>Estás viejo.</p>";
            break;
            case $edad <= 85:
                echo "<p class='validado'>Estás en el tiempo de descuento.</p>";
                break;
        default:
            echo "<p class='no_validado'>Eres inmortal. Solo puede quedar uno.</p>";
    }


    /*       if ($edad <= 18) {
            echo "Eres menor de edad";
        } else if ($edad <= 40) {
            echo "Eres joven";
        } else if ($edad <= 65) {
            echo "Eres maduro";
        } else if ($edad <= 80) {
            echo "Estás viejo";
        } else if ($edad <= 85) {
            echo "Estás en el tiempo de descuento";
        } else {
            echo "Eres inmortal. Solo puede quedar uno.";
        } */
}

?>
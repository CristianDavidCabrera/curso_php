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

    $usuario = $_POST["nombre_usuario"];
    $edad = $_POST["edad_usuario"];

    if ($edad <= 18) {
        echo "Eres menor de edad";
    } else if ($edad <= 40){
        echo "Eres joven";
    } else if ($edad <=65){
        echo "Eres maduro";
    } else if ($edad <=80){
        echo "Estás viejo";
    } else if ($edad <= 85){
        echo "Estás en el tiempo de descuento";
    } else {
        echo "Eres inmortal. Solo puede quedar uno.";
    }
}



?>
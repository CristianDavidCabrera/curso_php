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

        //Creación de clase.
        class Coche
        {

            //propiedades o atributos de clase. --> qué características tienen.
            public $ruedas;
            public $color;
            public $motor;

            //Método constructor. Nos da siempre el estado incial de una clase.
            function __construct()
            {
                $this->ruedas=4;
                $this->color="";
                $this->motor=1600;
            }

            //métodos o funcionalidades -->  qué pueden hacer.
            function arrancar()
            {
                echo "Estoy arrancando <br>";
            }

            function girar()
            {
                echo "Estoy girando <br>";
            }

            function frenar()
            {
                echo "Estoy frenando <br>";
            }
        }

        /* new Coche (); //Instancia de clase */
        $renault = new Coche(); //asignación de instancia o ejemplar de clase.
        $citroen = new Coche();
        $seat = new Coche();

        $citroen->girar();
        
        echo $citroen->ruedas;


    ?>
</body>

</html>
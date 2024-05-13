<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Conceptos Básicos</title>
</head>

<body>

    <?php

    /*-------------------------------*/
    /*  Clase. Declaración de clase  */
    /*-------------------------------*/

    class Coche
    {

        /*-------------------------------*/
        /* Características o Propiedades */
        /*-------------------------------*/
        
        var $ruedas; //Propiedad o atributo.
        var $color;  //Propiedad o atributo.
        var $motor;  //Propiedad o atributo.


        /*-----------------------------------------------*/
        /* Funcionalidades o Métodos. Qué pueden hacer.  */
        /*-----------------------------------------------*/

        function arrancar()
        {

        }
        function girar()
        {

        }
        function frenar()
        {

        }
    }


    /*----------------------------------*/
    /* Objeto. Declaración de instacia. */
    /*----------------------------------*/

    $obj_1 = new Coche();

    $obj_2 = new Coche();

    $obj_n = new Coche();

    ?>

</body>

</html>
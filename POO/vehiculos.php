<?php

    //Creación de clase coche.
    class Coche
    {

        //propiedades o atributos de clase. --> qué características tienen.
        protected int $ruedas;
        protected string $color;
        protected int $motor;

        //Método constructor. Nos da siempre el estado incial de una clase. Inicialización.
        function __construct()
        {
            $this->ruedas = 4;
            $this->color = "blanco";
            $this->motor = 1600;
        }

        //Métodos Getters y Setters. 
        //Los métodos Setters sirven para modificar las propiedades de los objetos o clases. 
        //Los métodos Getters sirven para ver u obtener las propiedades de los objetos o clases.

        function get_ruedas()
        {
            return $this->ruedas;
        }

        function get_color()
        {
            return $this->color;
        }

        function get_motor()
        {
            return $this->motor;
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

        function set_color($color_coche, $nombre_coche)
        {
            $this->color = $color_coche;
            echo "El color del " . $nombre_coche . " es " . $this->color . "<br>";
        }
    }


    /* ------------------------------------------------------------------------------------ */


    //Creación de clase camion.
    class Camion extends Coche
    {

   
        //Método constructor. Nos da siempre el estado incial de una clase. Inicialización.
        function __construct()
        {
            $this->ruedas = 8;
            $this->color = "gris";
            $this->motor = 1600;
        }

        /* Sobreescritura de método, se hace para adaptar el método heredado de la superclase a la subclase. */
       /*  function set_color($color_camion, $nombre_camion) //establece color.
        {
            $this->$color = $color_camion;
            echo "El color del " . $nombre_camion . " es " . $color_camion . "<br>";
        } */

        /* Herencia de un solo método.*/
        function arrancar()
        {
            parent::arrancar(); // Ejecuta el método arrancar de la clase padre o superclase, es decir la clase coche.
            echo "El camión ya está arrancado." . "<br>"; // Añadimos más instrucciones que se ejecutarán después del método de la superclase.
        }
    }

?>

<?php

    //Creación de clase coche.
    class Coche
    {

        //propiedades o atributos de clase. --> qué características tienen.
        public $ruedas;
        public $color;
        public $motor;

        //Método constructor. Nos da siempre el estado incial de una clase.
        function __construct()
        {
            $this->ruedas = 4;
            $this->color = "";
            $this->motor = 1600;
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

        function establecer_color($color_coche, $nombre_coche)
        {
            $this->color = $color_coche;
            echo "El color del " . $nombre_coche . " es " . $this->color . "<br>";
        }
        
    }


/* ------------------------------------------------------------------------------------ */


//Creación de clase camion.
class Camion
{

    //propiedades o atributos de clase. --> qué características tienen.
    public $ruedas;
    public $color;
    public $motor;

    //Método constructor. Nos da siempre el estado incial de una clase.
    function __construct()
    {
        $this->ruedas = 8;
        $this->color = "gris";
        $this->motor = 2600;
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



?>

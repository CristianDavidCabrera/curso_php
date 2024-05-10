<?php 
    require "conexion.php";

    class DevuelveProductos extends Conexion {

        public function __construct(){
            parent::__construct();
    
        } 


        public function get_productos($dato){
            $resultado=$this->conexion_db->query('SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN="'. $dato . '"');
            $productos=$resultado->fetch_all(MYSQLI_ASSOC);
            return $productos; 
        }



    }


?>
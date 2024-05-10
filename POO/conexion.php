<?php
require("config.php");


/* --------------------------*/
/* Conexion utilizando msqli */
/* --------------------------*/

/* class Conexion {

            protected $conexion_db;

            public function __construct()
            {

            $this->conexion_db=new mysqli('DB_HOST, DB_NAME, DB_USER, DB_PASSWD');

                if ($this->conexion_db->connect_errno){ 
                    echo "Fallo al conectar MySql: " . $this->conexion_db->connect_error;
                    return;

                }
                $this->conexion_db->set_charset(DB_CHARSET);

            }

        } */



/* --------------------------*/
/* Conexion utilizando PDO   */
/* --------------------------*/

class Conexion
{

    protected $conexion_db;

    public function __construct()
    {

        try {

        /*    $this->conexion_db = new PDO('DB_HOST; DB_NAME', 'DB_USER', 'DB_PASSWD'); */ //falla
           $this->conexion_db = new PDO('mysql:host=localhost; dbname=pruebas','root','');
            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion_db->exec("SET CHARACTER SET utf8");

            return $this->conexion_db;


        } catch (Exception $e) {
            echo "La línea de error es: " . $e->getLine();
        }
    }
}




?>
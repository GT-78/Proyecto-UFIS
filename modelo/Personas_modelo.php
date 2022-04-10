<?php

    class Personas_model{

        private $db; // En esta variable guardo la conexion a la BBDD.
        private $personas; //

        public function __construct(){
            
            require_once("modelo/conectar.php");

            $this->db=Conectar::conexion ();

            $this->personas=array ();
        }
        
        public function get_personas(){

            require("paginacion.php");
            
            $consulta=$this->db->query("SELECT * FROM TBLUSUARIOS limit $empezar_desde, $tamano_paginas");

            while($filas=$consulta->fetch (PDO::FETCH_ASSOC)){

                $this->personas []=$filas;
            }
            return $this->personas;

        }

    }

?>
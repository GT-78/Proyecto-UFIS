<?php

// llamada al modelo
require_once ("modelo/Personas_modelo.php");

$persona=new Personas_model(); //instanciamos la clase Producto_modelo

$matrizPersonas=$persona->get_personas(); // devuelve un array que guardo en matrizProductos

// llamada al la vista
require_once ("vista/Personas_view.php");


?> 
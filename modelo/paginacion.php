<?php

require_once("conectar.php");

$base=Conectar::conexion();

//--------------------------Paginacion--------------------
$tamano_paginas=10; //Cuantos registros quiero mostrar por pagina

if(isset($_GET["pagina"])){
    if ($_GET["pagina"]==1){

        header("Location:index.php");
    }else{

        $pagina=$_GET["pagina"];
    }

}else{

$pagina=1; //La pagina que estamos al cargar por primera ves nuestra pagina ves. 
}

$empezar_desde=($pagina-1)*$tamano_paginas;

$sql_total="SELECT * FROM TBLUSUARIOS";

$resultado=$base->prepare($sql_total);

$resultado->execute(array());

$num_filas=$resultado->rowCount();//Muestra las filas que tenemos dentro del array. 

$total_paginas=ceil($num_filas/$tamano_paginas);//ceil: para redondear el resultado

//-----------------------------------------------------------------------------------
?>
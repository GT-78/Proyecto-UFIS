<?php

    include("conectar.php");

    $base=Conectar::conexion();

    $Id=$_GET["Id"];

    $base->query("DELETE FROM TBLUSUARIOS WHERE ID='$Id'");

    header("Location:/Proyecto-UFIS/index.php");

?>
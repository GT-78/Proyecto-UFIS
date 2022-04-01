<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"  rel="stylesheet"> -->
</head>
<body>
    <?php

    include("conectar.php");

    $base=Conectar::conexion();

    $busqueda=$_GET["buscar"];
    $busqueda_ape=$_GET["buscar"];
    //$sql="SELECT * FROM datos_usuarios WHERE NOMBRE LIKE '%'busqueda'%'"; //1ra consulta
    //$sql="SELECT ID, NOMBRE, APELLIDO, DIRECCION FROM datos_usuarios WHERE NOMBRE = ?";
    $sql="SELECT ID, NOMBRE, APELLIDO, USUARIO, CLAVE, INTERNO, TEAM, UBICACION, DEPARTAMENTO, OBSERVACIONES FROM TBLUSUARIOS WHERE NOMBRE LIKE '%' ? '%' OR APELLIDO LIKE '%' ? '%'";
    $resultado=$base->prepare($sql); 

    $resultado->execute(array($busqueda, $busqueda_ape));

    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
        echo "<table width='50%' align='center' border='1'><tr><td>";
        echo $registro['ID'] . "</td><td>";
        echo $registro['NOMBRE'] . "</td><td>";
        echo $registro['APELLIDO'] . "</td><td> ";
        echo $registro['USUARIO'] . "</td><td> ";
        echo $registro['CLAVE'] . "</td><td> ";
        echo $registro['INTERNO'] . "</td><td> ";
        echo $registro['TEAM'] . "</td><td> ";
        echo $registro['UBICACION'] . "</td><td> ";
        echo $registro['DEPARTAMENTO'] . "</td><td> ";
        echo $registro['OBSERVACIONES'] . "</td><td></tr></td></table>";
        echo "<br>";
        

        /*-----------SEGUNDA <FORMA------------------------*/
        /*echo "Id: " . $registro['ID'] . " Nombre: " . $registro['NOMBRE'] . " Apellido: " . $registro['APELLIDO'] . " Direccion: " . $registro['DIRECCION'] . "<br>";*/

        // Mi forma
        /*echo $registro['NOMBRE'] . "," . $registro['APELLIDO'] . "," . $registro['DIRECCION'] . "<br>";*/
        
    }

    $resultado->closeCursor();
    ?>
    
    <td class="bot"><a href="/Curso%20PHP/UFIS/index.php"><input type='button' name='atras' id='atras' value='Volver'></a></td>
    
</body>
</html>
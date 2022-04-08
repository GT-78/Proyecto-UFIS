<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    try{

        $conexion=new PDO("mysql:host=localhost; dbname=ufis", "root", "root");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql="SELECT * FROM PERFILUSUARIOS WHERE USUARIO= :login AND PASSWORD= :password";

        $resultado=$conexion->prepare($sql);

        $login=htmlentities(addslashes($_POST["login"]));
        $password=htmlentities(addslashes($_POST["password"]));

        $resultado->bindValue(":login", $login);
        $resultado->bindValue(":password", $password);

        $resultado->execute();

        $numero_registro=$resultado->rowCount (); // rowCount nos dice el numero de registros que devuelve una consulta.

        if($numero_registro!=0){

            //echo "<h2>Adelante!!</h2>";
            session_start();

            $_SESSION["usuario"]=$_POST["login"];

            //header ("location:usuarios_registrados1.php");
            header ("location:/Proyecto-UFIS/index.php");

        }else{
            header("location:login.php");
        }

    }catch(Exception $e){

        die ("Error: " . $e->getMessage());
    }
    ?>
</body>
</html>
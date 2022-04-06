<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" type="text/css" href="hoja.css"> -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"  rel="stylesheet">
</head>

<body>

<center><h1>ACTUALIZAR</h1>
</center>
<?php

include("conectar.php");

$base=Conectar::conexion();

  if(!isset($_POST["bot_actualizar"])){

  $Id=$_GET["Id"];
  $nom=$_GET["nom"];
  $ape=$_GET["ape"];
  $usu=$_GET["usu"];
  $cla=$_GET["cla"];
  $inte=$_GET["inte"];
  $team=$_GET["team"];
  $ubi=$_GET["ubi"];
  $dpto=$_GET["dpto"];
  $obs=$_GET["obs"];

}else{

  $Id=$_POST["id"];
  $nom=$_POST["nom"];
  $ape=$_POST["ape"];
  $usu=$_POST["usu"];
  $cla=$_POST["cla"];
  $inte=$_POST["inte"];
  $team=$_POST["team"];
  $ubi=$_POST["ubi"];
  $dpto=$_POST["dpto"];
  $obs=$_POST["obs"];

  // Consulta preparada
  $sql="UPDATE TBLUSUARIOS SET Nombre=:miNom, Apellido=:miApe, Usuario=:miUsu, Clave=:miCla, Interno=:miInte, Team=:miTeam, Ubicacion=:miUbi, Departamento=:miDpto, Observaciones=:miObs WHERE Id=:miId"; 
  
  $resultado=$base->prepare($sql);

  // Ejecucion del array
  $resultado->execute(array(":miId"=>$Id, ":miNom"=>$nom, ":miApe"=>$ape, ":miUsu"=>$usu, ":miCla"=>$cla, ":miInte"=>$inte, ":miTeam"=>$team, ":miUbi"=>$ubi, ":miDpto"=>$dpto, ":miObs"=>$obs)); 

  header("Location:/Proyecto-UFIS/index.php"); //Volvemos a la pagina index con la informacion actaulizada. 

}

?>

<p>

</p>
<p>&nbsp;</p>
<div class="container-fluid">
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $Id ?>"></td>
    </tr>
    <tr>
      <td>Nombre</td> 
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $nom ?>"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="ape"></label>
      <input type="text" name="ape" id="ape" value="<?php echo $ape ?>"></td>
    </tr>
    <tr>
      <td>Usuario</td>
      <td><label for="usu"></label>
      <input type="text" name="usu" id="usu" value="<?php echo $usu ?>"></td>
    </tr>
    <tr>
      <td>Clave</td>
      <td><label for="cla"></label>
      <input type="text" name="cla" id="cla" value="<?php echo $cla ?>"></td>
    </tr>
    <tr>
      <td>Interno</td>
      <td><label for="inte"></label>
      <input type="text" name="inte" id="inte" value="<?php echo $inte ?>"></td>
    </tr>
    <tr>
      <td>Team</td>
      <td><label for="team"></label>
      <input type="text" name="team" id="team" value="<?php echo $team ?>"></td>
    </tr>
    <tr>
      <td>Ubicacion</td>
      <td><label for="ubi"></label>
      <!-- <td> -->
      <select name="ubi" id="ubi">
        <option></option>
        <option>Moreno 1 P</option>
        <option>Moreno 2 P</option>
        <option>9 de Julio 4 P</option>
        </select>
        <!--<input type="hidden" name="ubi" id="ubi" value="<?php echo $ubi ?>"></td>-->
      
      </tr>
    <tr>
      <td>Departamento</td>
      <td><label for="dpto"></label>
      <select name="dpto" id="dpto">
        <option></option>
        <option>Dir. Gral.</option>
        <option>AyC</option>
        <option>RRHH</option> 
        <option>AyF</option>
        <option>Informatica</option>
        <option>Ases. Legal</option>
        <option>Planificacion</option>
        <option>Auditoria</option>
        <option>Mesa TAD</option>
        <option>Presupuesto</option>
        <option>Finanzas</option>
        <option>Cuentas a Pagar</option>
      <!--<input type="hidden" name="dpto" id="dpto" value="<?php echo $dpto ?>"></td> -->
      </select>
    </tr>
    <tr>
      <td>Observaciones</td>
      <td><label for="obs"></label>
      <input type="text" name="obs" id="obs" value="<?php echo $obs ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar" class="bg-primary bg-gradient"></td>
    </tr>
    <tr>
    <td colspan="2"><a href="/Proyecto-UFIS/index.php"><input type='button' name='atras' id='atras' value='Volver' class='bg-success bg-gradient'></a></td>
    </tr>
   
  </table>
  
</form>
</div>
<p>&nbsp;</p>
</body>
</html>
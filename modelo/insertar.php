<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS Bootstrap de forma local -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"  rel="stylesheet"> -->
</head>
<body>



<center><h1>NUEVO USUARIO</h1></center>
<?php


include("conectar.php");

$base=Conectar::conexion();

/*----------------------INSERTAR REGISTRO----------------------------------*/
require ("paginacion.php");
      
      if (isset($_POST["cr"])){
        $nombre=$_POST["Nom"];
        $apellido=$_POST["Ape"];
        $usuario=$_POST["Usu"];
        $clave=$_POST["Cla"];
        $inte=$_POST["Inte"];
        $team=$_POST["Team"];
        $ubicacion=$_POST["Ubi"];
        $departamento=$_POST["Dpto"];
        $observaciones=$_POST["Obs"];
    
        $sql="INSERT INTO TBLUSUARIOS (NOMBRE, APELLIDO, USUARIO, CLAVE, INTERNO, TEAM, UBICACION, DEPARTAMENTO, OBSERVACIONES) VALUES (:nom, :ape, :usu, :cla, :inte, :team, :ubi, :dpto, :obs
        )";
    
        $resultado=$base->prepare($sql);
    
        $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":usu"=>$usuario, ":cla"=>$clave, ":inte"=>$inte, ":team"=>$team, ":ubi"=>$ubicacion, ":dpto"=>$departamento, ":obs"=>$observaciones));
    
        //header("Location:index.php");
        header("Location:/Proyecto-UFIS/index.php");
      }
  /*----------------------------------------------------------------------------*/

      
    
?>
<div class="container">
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table align="center"> 
<tr>
	<td></td>
      <tr><td><label>Nombre:</label><input type='text' name='Nom' size='12' class='centrado' placeholder="Nombre"></td></tr>
      <tr><td><label>Apellido:</label><input type='text' name='Ape' size='12' class='centrado' placeholder="Apellido"></td></tr>
      <tr><td><label>Usuario:</label></label><input type='text' name='Usu' size='12' class='centrado' placeholder="Usuario"></td></tr>
      <tr><td><label>Contraseña:</label></label><input type='text' name='Cla' size='12' class='centrado' placeholder="Contraseña"></td></tr>
      <tr><td><label>Interno:</label><input type='text' name='Inte' size='12' class='centrado' placeholder="Interno"></td></tr>
      <tr><td><label>TeamViewer:</label><input type='text' name='Team' size='12' class='centrado' placeholder="TeamViewer"></td></tr>
      <tr></tr><td><label for="ubi">Ubicacion:</label>
      <!-- <td> -->
      <select name="ubi" id="ubi">
        <option></option>
        <option>Moreno 1 P</option>
        <option>Moreno 2 P</option>
        <option>9 de Julio 4 P</option>
        </select></tr>
      <!-- <td><input type='text' name='Ubi' size='10' class='centrado' placeholder="Ubicacion"></td> -->
      <!--<td><input type='text' name='Dpto' size='10' class='centrado' placeholder="Sector"></td> -->
      <tr><td><label for="dpto">Sector:</label>
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
      </select></tr>
      <tr><td><label>Observaciones:</label><textarea type='text' name='Obs' size='12' class='centrado' placeholder="Observaciones"></textarea></td></tr>
      <tr><td class='bot'><input type='submit' name='cr' id='cr' value='Insertar' class="bg-primary bg-gradient"></td></tr>
      <td class="bot"><a href="/Proyecto-UFIS/index.php"><input type='button' name='atras' id='atras' value='Volver' class='bg-success bg-gradient'></a></td>
      </tr>
</table> 
</form>
</div>
<p>&nbsp;</p>


<!-- JS Boostrap Local -->
<script scr="js/bootstrap.bundle.min.js"></script>
</body>
</html>
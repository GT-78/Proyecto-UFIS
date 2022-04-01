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

include("conectar.php");

$base=Conectar::conexion();

?>
<center><h1>NUEVO USUARIO</h1>
</center>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table width="25%" border="0" align="center">
<tr>
	<td></td>
      <tr><td><label>Nombre:</label><input type='text' name='Nom' size='12' class='centrado' placeholder="Nombre"></td></tr>
      <tr><td><label>Apellido:</label><input type='text' name='Ape' size='12' class='centrado' placeholder="Apellido"></td></tr>
      <tr><td><label>Usuario:</label></label><input type='text' name='Usu' size='12' class='centrado' placeholder="Usuario"></td></tr>
      <tr><td><label>Conrraseña:</label></label><input type='text' name='Cla' size='12' class='centrado' placeholder="Contraseña"></td></tr>
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
      <tr><td class='bot'><input type='submit' name='cr' id='cr' value='Insertar' style="background-color: #81C784;"></td></tr>
      <td class="bot"><a href="/Curso%20PHP/UFIS/index.php"><input type='button' name='atras' id='atras' value='Volver'></a></td>
      </tr>
      
</table>

</form>
<p>&nbsp;</p>
</body>
</html>
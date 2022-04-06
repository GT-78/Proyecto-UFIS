<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <!--<link rel="stylesheet" type="text/css" href="hoja.css"> -->
    <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"  rel="stylesheet"> -->
    
    <!-- CSS Bootstrap de forma local -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- CSS Bootstrap modo CDN -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

</head>
<body>
    <?php

      require ("modelo/paginacion.php");
      /*----------------------INSERTAR REGISTRO----------------------------------*/
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
    
        header("Location:index.php");
        //header("Location:/Curso%20PHP/UFIS/index.php");
      }
      /*----------------------------------------------------------------------------*/

      
    ?>

<!---------------------FORMULARIO DE BUSQUEDA------------------------->
<div class="container-fluid">
<form action="/Proyecto-UFIS/modelo/pagina_busqueda.php" method="get" class="">
  <label>Buscar: <input type="text" name="buscar" placeholder="Nombre"></label>
  <input type="submit" name="enviando" value="Ir" class="bg-secondary bg-gradient">

<!----------------------BOTON DE PAGINA AGREGAR USUARIO---------------->
<td class="bot"><a href="modelo/insertar.php"><input type='button' name='atras' id='atras' value='Agregar' class='bg-success bg-gradient'></a></td>
</form>
</div>
<br>
<!--------------------------------------------------------------------->    


    

<!--------------------------------------------------------------------->
    <!--<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1> -->
<div class="container-fluid "> 
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table class="table" width="50%" border="0" align="center">
    <!--<thead class="table-succes table-striped"> -->
    <tr>
      <th class="primera_fila" style="color: #5499C7;">Id</th>
      <th class="primera_fila" style="color: #5499C7;">Nombre</th>
      <th class="primera_fila" style="color: #5499C7;">Apellido</th>
      <th class="primera_fila" style="color: #5499C7;">Usuario</th>
      <th class="primera_fila" style="color: #5499C7;">Clave</th>
      <th class="primera_fila" style="color: #5499C7;">Interno</th>
      <th class="primera_fila" style="color: #5499C7;">Team</th>
      <th class="primera_fila" style="color: #5499C7;">Ubicacion</th>
      <th class="primera_fila" style="color: #5499C7;">Departamento</th>
      <th class="primera_fila" style="color: #5499C7;">Observaciones</th>
      <th class="sin">&nbsp;</th>
      <th class="sin">&nbsp;</th>
      <th class="sin">&nbsp;</th>
    </tr> 
    <!-- </thead> -->
		<?php

      foreach($matrizPersonas as $persona):?>
    <tbody>
   	<tr>
      <th><?php echo $persona["Id"]?></th>
      <th><?php echo $persona["Nombre"]?></th>
      <th><?php echo $persona["Apellido"]?></th>
      <th><?php echo $persona["Usuario"]?></th>
      <th><?php echo $persona["Clave"]?></th>
      <th><?php echo $persona["Interno"]?></th>
      <th><?php echo $persona["Team"]?></th>
      <th><?php echo $persona["Ubicacion"]?></th>
      <th><?php echo $persona["Departamento"]?></th>
      <th><?php echo $persona["Observaciones"]?></th>
      <!-----------------BOTON ACTUALIZAR----------------------------->
      <th class='bot'><a href="modelo/editar.php?Id=<?php echo $persona["Id"]?> & nom=<?php echo $persona["Nombre"]?> & ape=<?php echo $persona["Apellido"]?> & usu=<?php echo $persona["Usuario"]?> & cla=<?php echo $persona["Clave"]?> & inte=<?php echo $persona["Interno"]?> & team=<?php echo $persona["Team"]?> & ubi=<?php echo $persona["Ubicacion"]?> & dpto=<?php echo $persona["Departamento"]?> & obs=<?php echo $persona["Observaciones"]?>"><input type='button' name='up' id='up' value='Actualizar' class='bg-primary bg-gradient'></a></th>  
      <!-----------------BOTON BORRAR--------------------------------->
      <th class="bot"><a href="modelo/borrar.php?Id=<?php echo $persona["Id"]?>"><input type='button' name='del' id='del' value='Borrar' class='bg-danger bg-gradient'></a></th>

      </tr>
    </tbody>
    </div>
    <?php

      endforeach;

    ?>
<!---------------------FORMULARFIO INSERTAR-----------------------------------------------
	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado' placeholder="Nombre"></td>
      <td><input type='text' name='Ape' size='10' class='centrado' placeholder="Apellido"></td>
      <td><input type='text' name='Usu' size='20' class='centrado' placeholder="Usuario"></td>
      <td><input type='text' name='Cla' size='10' class='centrado' placeholder="Contraseña"></td>
      <td><input type='text' name='Inte' size='5' class='centrado' placeholder="Interno"></td>
      <td><input type='text' name='Team' size='10' class='centrado' placeholder="TeamViewer"></td>
      <td><label for="ubi"></label>
      <td> 
      <select name="ubi" id="ubi">
        <option></option>
        <option>Moreno 1 P</option>
        <option>Moreno 2 P</option>
        <option>9 de Julio 4 P</option>
        </select>
      <td><input type='text' name='Ubi' size='10' class='centrado' placeholder="Ubicacion"></td> 
      <td><input type='text' name='Dpto' size='10' class='centrado' placeholder="Sector"></td> 
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
      <input type="hidden" name="dpto" id="dpto" value="<?php echo $dpto ?>"></td> 
      </select>
      <td><input type='text' name='Obs' size='10' class='centrado' placeholder="Observaciones"></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar' style="background-color: #81C784;"></td></tr>
    -->  
  </table>
  
</form> 

<!------------------------PAGINACION----------------------------->
<?php


        for($i=1; $i<=$total_paginas; $i++){

            echo "<a href='?pagina=" . $i . "'>" . $i . "</a> ";
        
        }
?> 
<!-- JS Boostrap Local -->
<script scr="js/bootstrap.bundle.min.js"></script>

<!-- JS Boostrap CDN -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
</body>
</html>
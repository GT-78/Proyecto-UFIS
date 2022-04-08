<!doctype html>
<html>

    <head>
    
        <meta charset="utf-8">
        <title>Documento sin título</title>
        
    </head>
    
    <body>
    
    	 <?php
		 	
			$usuario = $_GET["usu"];
			
			$password = $_GET["con"];

			/*include("Proyecto-UFIS/modelo/conectar.php");

			$base=Conectar::conexion();*/
        	
            require ("datos_conexion.php");
            
            $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
			
			if(mysqli_connect_errno()){
				echo "Fallo al conectar con la BBDD";
				exit();
			}
			
			mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
			
			mysqli_set_charset($conexion, "utf8");
            
            /*$conexion=new PDO("mysql:host=localhost; dbname=ufis", "root", "root");
        	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
			
			$consulta="SELECT USUARIO, PASSWORD, PERFIL FROM PERFILUSUARIOS WHERE USUARIO = ? AND PASSWORD= ?";  
			
			echo "<br><br>";        
			
           // $resultados=mysqli_query($conexion, $consulta);
		   
		   $resultados=mysqli_prepare($conexion, $consulta);
		   
		   $ok=mysqli_stmt_bind_param($resultados, 'ss', $usuario, $password);
		   	   
		   $ok=mysqli_stmt_execute($resultados);
		   
		   if($ok==false){
			   
			   echo "Error en la consulta";
			   
		   } else{
			
				$ok=mysqli_stmt_bind_result($resultados, $usuario, $password, $perfil);   
				
				 
			   
		   }
		   
		   
		   while(mysqli_stmt_fetch($resultados)){
			
				echo "Hola " . $usuario . "<br>";
				
				echo "Tu perfil es " . $perfil. "<br>"; 
				
			}
		   
		   if($perfil=="Administrador"){
			   
				//include("menu_administrador.html");   
				//require_once("./index.php");
				//header("location:./index.php");
				header ("location:/Proyecto-UFIS/index.php");
			   
			   
		   }else{
			   
			   
				include("menu_usuarios.html");   
			   
		   }
            
        
		   
		   
			mysqli_stmt_close($resultados);
			mysqli_close($conexion);
            
        ?>
    	
    </body>
    
</html>
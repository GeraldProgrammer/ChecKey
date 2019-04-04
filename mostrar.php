<!DOCTYPE html>
<html>
<head>
	<title>Administrar cuentas de usuarios</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Css/Registro.css">
	<link rel="Icon"  href="Imagenes/icono.png">
	<link rel="stylesheet" type="text/css" href="Css/reset.css">
	<link rel="stylesheet" type="text/css" href="Css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js">
	</script>
	<script type="text/javascript" src="Js/menuresponsive.js"></script>
	<link rel="stylesheet" type="text/css" href="Css/Estilos1.css">
	<link rel="stylesheet" type="text/css" href="Css/tabla.css">
</head>

<body style="background-color: #333;">
	<div align="center" class="ver">
		<img src="Imagenes/icono.png" width="155" height="95">
		
	</div>

	<header class="container">		
			<nav class="navbar">
			  <div class="container-fluid">			    
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">			        
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="pagina1.php">ChecKey</a>
			    </div>

			    <div class="collapse navbar-collapse" id="menu">
			      <ul class="navbar-nav">
			        
			        
			        <li class="dropdown">
			          <a href="" class="dropdown-toggle">Acerca de <b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href=" que es.php">¿Que es ChecKey?</a></li>
			            <li><a href="">¿Como usar ChecKey?</a></li>
			            
			            <li class="divider"></li>
			            
			            <li class="dropdown">
					          <a href="https://www.henry-chavez.com" class="dropdown-toggle">Creacion de ChecKey <b class="caret right"></b></a>
					          <ul class="dropdown-menu">
					            <li><a href="lenguajes.php">Lenguajes de programacion utilizados</a></li>
					            <li><a href="">Problematica a solucionar</a></li>
					            <li><a href="plataforma.php">Plaforma utilizada</a></li>
				 	            
					            
					          </ul>
				        </li>
			          </ul>
			        </li>
			      </ul>			      
			      <ul class="nav navbar-nav navbar-right">
			        <li class="diseñar"> <font size="5pt" color="SkyBlue"  ><center>Bienvenidos a Checkey</center></font></li>

			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        <li>&nbsp;</li>
			        
			                     <li class="dropdown">
			          <a href="">Opciones de administrador <b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="admin.php">Crear cuentas de usuario</a></li>
			            <li><a href="admin2.php">Cierre de empleado</a></li>
			            <li><a href="admin1.php">Administrar cuentas de usuario</a></li>
			           
			            
			          </ul>
			        </li>


			        <li >
			          <a href="redes.php">Contactos</a>
			          
			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>		
	</header>
	
		
				
					
						<div class="juntar">
							<div align="right">
					

					<a href="pagina1.php" style="margin-right: 30px;"> Cerrar sesion</a>
				</div>
				
				
				<div align="left" >
				<font color="white" size="4px" style="margin-left: 20px;" > Bienvenido usuario Administrador.</font>
				</div>									
						</div>
					</div>
					<br>
					<br>

                  <div style="color: white; " >					

                  	<?php 
					include("conexion.php");
					$link= Conectarse();

					$result = mysql_query(' SELECT id, nombre, correo,telefono,horario_entrada,direccion,nombre_usuario,password FROM registros ', $link);

					echo "<table border= '1' class='tab'>";
					echo "<tr>";
					

					           echo"<th colspan='8' bgcolor='SkyBlue' style='color:black;'> <h1>Datos de las cuentas de usuario</h1></th>";
								
					            echo "</tr>";
					echo "<tr>";
					echo"<th>ID</th>";


					           echo"<th>Nombre</th>";
								echo "<th>Correo</th>";
								echo "<th>Telefono</th>";
								echo "<th>Hora de entrada</th>";
								echo "<th>Direccion</th>";
								echo "<th>Nombre de usuario</th>";
								echo "<th>Contrase&ntilde;a</th>";
					            echo "</tr>";
					            while ($row = mysql_fetch_row($result)) {
					            	echo "<tr>";
					            	echo "<td>". $row[0] . "</td>";
					            	echo "<td>". $row[1] . "</td>";
					            	echo "<td>". $row[2] . "</td>";
					            	echo "<td>". $row[3] . "</td>";
					            	echo "<td>". $row[4] . "</td>";
					            	echo "<td>". $row[5] . "</td>";
					            	echo "<td>". $row[6] . "</td>";
					            	echo "<td>". $row[7] . "</td>";


					            	echo "</tr>";


					            	
					            }

					echo "</table>";




					 ?>
					 </div>
					 <style type="text/css">
					 	.borrado  {
	
	
	padding: 15px;
	font-family: arial;
	margin-right: 10px;
	float:left;
	width:450px; 
	margin-bottom: 10px;


	margin-left: 190px;
}

.modificado {
	padding: 15px;
	font-family: arial;
	margin-right: 10px;
	float:left;
	width:450px; 
	margin-bottom: 10px;

	margin-left: 70px;
}
					 	



					 </style>
					 <!-- Borrado de cuentas  -->


					 <div  >
					 	<fieldset class="borrado">
					 		<legend style="color:black;"><h2>Borrar cuentas de usuario</h2></legend>

					 		<form method="post" action="borrar.php">
					 			&nbsp;


					 			<label style="color: white; font-size: 18px;"> ID:</label>
					 			<br>
							
							
							


							<input style="border-radius:13px;" type="text" name="id" required autofocus>
							
							<input style="border-radius: 13px; padding: 4px; width:80px; background-color: grey; border-color: skyblue; color: black;" type="Submit" value="Borrar" name="">

					 			


					 		</form>
					 		




					 	</fieldset>
					 	
					 </div>
					 
					 <!-- Modificado de cuentas  -->

					  <div   >
					 	<fieldset class="modificado">
					 		<legend style="color:black;"><h2>Modificar cuentas de usuario</h2></legend>
					 		<form method="post" action="modificar.php">
					 				<label style="color: white; font-size: 18px;"> ID</label>
					 			<br>
							
							
							
							
							<input style="border-radius:13px; width: 40px; text-align: center;" type="text" required autofocus name="id">
							&nbsp;
							&nbsp;

							<br>
							<br>
							<br>

					 			<label style="color: white; font-size: 18px;"> Nombre</label>
					 			&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							
							
							<label style="color: white; font-size: 18px;">Correo</label>
							<br>
							
							


							<input required autofocus style="border-radius:13px;" type="text" name="nombre">
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							
							
							<input required autofocus style="border-radius:13px;" type="email" name="correo">
							&nbsp;
							&nbsp;

							<br>
							<br>
							<br>
							<label style="color: white; font-size: 18px;"> Telefono</label>
					 			&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							
							
							<label style="color: white; font-size: 18px;">Hora de entrada</label>
							<br>


							
							<input required autofocus style="border-radius:13px;" type="text" name="telefono">
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							<input required autofocus style="border-radius:13px;" type="time" name="horario_entrada">
							<br>
							<br>
							<br>

							<label style="color: white; font-size: 18px;"> Direccion</label>
					 			&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							
							
							<label style="color: white; font-size: 18px;">Nombre de usuario</label>
							<br>
							
							


							<input required autofocus style="border-radius:13px;" type="text" name="direccion">
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;
							
							
							<input required autofocus style="border-radius:13px;" type="text" name="nombre_usuario">
							&nbsp;
							&nbsp;

							<br>
							<br>
							<br>
							<label style="color: white; font-size: 18px;">Contraseña</label>
							<br>
							
							


							<input required autofocus style="border-radius:13px;" type="password" name="password">
							&nbsp;
							&nbsp;
							&nbsp;
							&nbsp;

							<input style="border-radius: 13px; padding: 4px; width:80px; background-color: grey; border-color: skyblue; color: black;" type="Submit" value="Modificar" >

					 			


					 		</form>
					 		
					 		




					 	</fieldset>
					 	
					 </div>



<script src="Js/noback.js"></script>


</body>
</html>


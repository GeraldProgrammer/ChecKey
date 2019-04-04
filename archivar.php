


<html>
<head>
	<title>Registro de usuarios</title>
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
	<style type="text/css">
		

		.formularioinput:focus + .formulario__label{

	margin-top: -110px;
}
	</style>

	


</head>


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
	<div >
		
				
					
						<div class="juntar">
							<div align="right">
					

					<a href="pagina1.php" style="margin-right: 30px;"> Cerrar sesion</a>
				</div>
				
				
				<div align="left" >
				<font color="white" size="4px" style="margin-left: 20px;" > </font>
				</div>
				
				
				
						
							
							
						</div>
					</div>
				

			
		
			


		</form>

		

	





	<br>
	
	
	<form class="formulario" action="insertar2.php"  method="POST"  >


		<h1 class="formulario__titulo" style="color: dodgerblue;"> Archivar datos</h1>
		
		<br>
		<br>

		<input style="color:dodgerblue ;" type="text" class="formularioinput"  required autofocus name="nombre">
		<label for="" class="formulario__label"  >Nombre completo</label>
		<br>

		<input style="color:dodgerblue ;" type="time" class="formularioinput" required autofocus  name="horario_salida" >
		<label for="" class="formulario__label">Horario de salida</label>
		<br>
		<?php

		$uno=$_POST['unor'];
		$cinco=$_POST['cincor'];
		$diez=$_POST['diezr'];
		$vcinco=$_POST['vcincor'];
		$cincuenta=$_POST['cincuentar'];
		$cien=$_POST['cienr'];
		$dosciento=$_POST['doscientor'];
		$quiniento=$_POST['quinientor'];
		$mil=$_POST['milr'];
		$dosmil=$_POST['dosmilr'];

		$total= $uno + $cinco + $diez + $vcinco + $cincuenta + $cien + $dosciento + $quiniento + $mil + $dosmil;




		echo "<input style='color:dodgerblue ;'  type='text'readonly='yes' class='formularioinput' required autofocus value='$total'  name='total' >
		<label  class='formulario__label'>Total generado</label>


		";
		?>
		<br>
		



		
		
		<input style="color:dodgerblue ;" type="date" class="formularioinput" required autofocus  name="fecha">
		<label for="" class="formulario__label">Fecha</label>

		
		

		<input type="submit" name="archivar"  class="formulario__submit" value="Archivar">
		

	</form>

	
	

	<script src="Js/noback.js"></script>

</body>
</html>

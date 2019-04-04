<!DOCTYPE html>
<html>
<head>
	<title>Insertar</title>
	
</head>
<body>

	<?php

	$servername="localhost";
	$database= "checkey";
	$username="root";
	$passwordserver="Gerald23";


	$nombre= $_POST['nombre'];
	$correo= $_POST['correo'];
	$telefono= $_POST['telefono'];
	$horario_entrada= $_POST['horario_entrada'];
	$direccion= $_POST['direccion'];
	$nombre_usuario= $_POST['nombre_usuario'];
	$password= $_POST['contraseña'];

	if($nombre_usuario=="Administrador" || $nombre_usuario=="administrador" ){
		echo "
	<script type='text/javascript'>

	function alerta()
    {
    var mensaje;
    var opcion = confirm('No puede utilizar Administrador como nombre de usuario');
    if (opcion == true) {
        window.location='registro.php';
	} else {
	    window.location='registro.php';
	}
	document.getElementById('ejemplo').innerHTML = mensaje;
}
alerta();
	</script>


	";
		

     
	}else{
		$conn = mysqli_connect($servername,$username, $passwordserver,$database);

	if(!$conn){

		die("La conexion de la base de datos ha fallado" . mysqli_connect_error());
	}
	
	$sql="insert into registros(nombre, correo,telefono,horario_entrada,direccion,nombre_usuario,password) values ('$nombre', '$correo','$telefono', '$horario_entrada', '$direccion','$nombre_usuario', '$password')";
	if(mysqli_query($conn, $sql)){


		echo "
	<script type='text/javascript'>

	function alerta()
    {
    var mensaje;
    var opcion = confirm('El usuario de ha registrado');
    if (opcion == true) {
        window.location='registro.php';
	} else {
	    window.location='registro.php';
	}
	document.getElementById('ejemplo').innerHTML = mensaje;
}
alerta();
	</script>


	";

	}
	else{

		echo "<div class='alert alert-danger mt-4' role='alert'> Error al establecer la conexion </div>";
	}
	mysqli_close($conn);
	}

	


	

	



	?>


</body>
</html>
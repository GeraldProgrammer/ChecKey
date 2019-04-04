
<?php

	$servername="localhost";
	$database= "checkey";
	$username="root";
	$passwordserver="Gerald23";

	$id= $_POST['id'];
    $nombre= $_POST['nombre'];
    $correo= $_POST['correo'];
    $telefono= $_POST['telefono'];
    $horario_entrada= $_POST['horario_entrada'];
    $direccion= $_POST['direccion'];
    $nombre_usuario= $_POST['nombre_usuario'];
    $password= $_POST['password'];

	

	
		$conn = mysqli_connect($servername,$username, $passwordserver,$database);

	if(!$conn){

		die("La conexion de la base de datos ha fallado" . mysqli_connect_error());
	}



	$sql=" UPDATE registros set nombre ='$nombre', correo ='$correo', telefono='$telefono', horario_entrada='$horario_entrada',direccion='$direccion',nombre_usuario='$nombre_usuario',password='$password' where id='$id'   ";
	if(mysqli_query($conn, $sql)){

			echo "
	<script type='text/javascript'>

	function alerta()
    {
    var mensaje;
    var opcion = confirm('Usuario modificado correctamente');
    if (opcion == true) {
        window.location='mostrar.php';
	} else {
	    window.location='mostrar.php';
	}
	document.getElementById('ejemplo').innerHTML = mensaje;
}
alerta();
	</script>


	";
		
		

		

	}else{

		echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);




	

	


	

	



	?>
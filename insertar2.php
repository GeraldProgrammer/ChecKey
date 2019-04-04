<?php
$servername="localhost";
	$database= "checkey";
	$username="root";
	$passwordserver="Gerald23";


	$nombre= $_POST['nombre'];
	$horario_salida= $_POST['horario_salida'];
	$total= $_POST['total'];
	$fecha= $_POST['fecha'];
	

	
		

     
	
		$conn = mysqli_connect($servername,$username, $passwordserver,$database);

	if(!$conn){

		die("La conexion de la base de datos ha fallado" . mysqli_connect_error());
	}
	
	$sql="insert into archivos(nombre, horario_salida,total,fecha) values ('$nombre', '$horario_salida',' $total', '$fecha' )";
	if(mysqli_query($conn, $sql)){


			echo "
	<script type='text/javascript'>

	function alerta()
    {
    var mensaje;
    var opcion = confirm('Registro guardado correctamente');
    if (opcion == true) {
        window.location='inicio.php';
	} else {
	    window.location='inicio.php';
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
	

	


	

	


?>
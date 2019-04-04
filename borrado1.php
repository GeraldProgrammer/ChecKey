<?php


$servername="localhost";
	$database= "checkey";
	$username="root";
	$passwordserver="Gerald23";


	$id= $_POST['id'];
	

	
		$conn = mysqli_connect($servername,$username, $passwordserver,$database);

	if(!$conn){

		die("La conexion de la base de datos ha fallado" . mysqli_connect_error());
	}
	
	$sql=" delete from archivos where id='$id'";
	if(mysqli_query($conn, $sql)){

			echo "
	<script type='text/javascript'>

	function alerta()
    {
    var mensaje;
    var opcion = confirm('Registro borrado exitosamente');
    if (opcion == true) {
        window.location='cierres.php';
	} else {
	    window.location='cierres.php';
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




	

	


	

	


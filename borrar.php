<?php

	$servername="localhost";
	$database= "checkey";
	$username="root";
	$passwordserver="Gerald23";


	$id= $_POST['id'];
	if ($id== 1) {
			echo "
	<script type='text/javascript'>

	function alerta()
    {
    var mensaje;
    var opcion = confirm('No es posible borrar el usuario administrador');
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
		$conn = mysqli_connect($servername,$username, $passwordserver,$database);

	if(!$conn){

		die("La conexion de la base de datos ha fallado" . mysqli_connect_error());
	}
	
	$sql=" delete from registros where id='$id'";
	if(mysqli_query($conn, $sql)){
		
	echo "
	<script type='text/javascript'>

	function alerta()
    {
    var mensaje;
    var opcion = confirm('Cuenta de usuario borrada correctamente');
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




	}
	

	
		



	

	


	

	



	?>
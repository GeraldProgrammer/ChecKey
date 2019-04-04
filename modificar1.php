<?php
$servername="localhost";
	$database= "checkey";
	$username="root";
	$passwordserver="Gerald23";

	$id= $_POST['id'];
    $nombre= $_POST['nombre'];
    $horario_salida= $_POST['horario_salida'];
    $total= $_POST['total'];
    $fecha= $_POST['fecha'];
   
	

	
		$conn = mysqli_connect($servername,$username, $passwordserver,$database);

	if(!$conn){

		die("La conexion de la base de datos ha fallado" . mysqli_connect_error());
	}



	$sql=" UPDATE archivos set nombre ='$nombre', horario_salida ='$horario_salida', total='$total', fecha='$fecha' where id='$id'";
	if(mysqli_query($conn, $sql)){

			echo "
	<script type='text/javascript'>

	function alerta()
    {
    var mensaje;
    var opcion = confirm('Registro modificado correctamente');
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

		alert("ERROR: " . $sql . "<br>" . mysqli_error($conn)) ;
	}
	mysqli_close($conn);


?>
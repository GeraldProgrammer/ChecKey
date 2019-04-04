
<title>Cargando.....</title>
<?php
$usuario= $_POST['usuario'];
$clave=$_POST['password'];

$conexion= mysqli_connect("localhost", "root", "Gerald23", "checkey");
$consulta= "SELECT * FROM REGISTROS WHERE nombre_usuario='$usuario ' and password ='$clave' ";
$resultado= mysqli_query($conexion, $consulta);

$filas= mysqli_num_rows($resultado);

if($filas>0){


	header('location: registro.php');
}else{

	



	
	echo "
	<script type='text/javascript'>

	function alerta()
    {
    var mensaje;
    var opcion = confirm(' Contrase\u00F1a incorrecta');
    if (opcion == true) {
        window.location='admin.php';
	} else {
	    window.location='admin.php';
	}
	document.getElementById('ejemplo').innerHTML = mensaje;
}
alerta();
	</script>


	";
}

mysqli_free_result($resultado);
mysqli_close($conexion);



?>

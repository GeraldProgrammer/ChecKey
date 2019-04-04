<title>Cargando.....</title>

<?php
 $usuario= $_POST['usuario'];
$clave=$_POST['password'];

if ($usuario=="Administrador"|| $usuario=="administrador") {
	echo "
	<script type='text/javascript'>

	function alerta()
    {
    var mensaje;
    var opcion = confirm('Usuario administrador, debe dirigirse a opciones de administrador, no puede acceder de este modo');
    if (opcion == true) {
        window.location='pagina1.php';
	} else {
	    window.location='pagina1.php';
	}
	document.getElementById('ejemplo').innerHTML = mensaje;
}
alerta();
	</script>


	";
	
}else{
	$conexion= mysqli_connect("localhost", "root", "Gerald23", "checkey");
$consulta= "SELECT * FROM REGISTROS WHERE nombre_usuario='$usuario ' and password ='$clave' ";
$resultado= mysqli_query($conexion, $consulta);

$filas= mysqli_num_rows($resultado);

if($filas>0){
	
	header('location: inicio.php');

}else{




	
	echo "
	<script type='text/javascript'>

	function alerta()
    {
    var mensaje;
    var opcion = confirm('Nombre de usuario o contrase\u00F1a incorrectos');
    if (opcion == true) {
        window.location='pagina1.php';
	} else {
	    window.location='pagina1.php';
	}
	document.getElementById('ejemplo').innerHTML = mensaje;
}
alerta();
	</script>


	";

	
	
	
}

mysqli_free_result($resultado);
mysqli_close($conexion);


}






?>

<?php

$cedula=$_POST['cedula'];
$contrasena=$_POST['contrasena'];

$conexion=mysqli_connect("localhost","root","","ba_datos");
$consulta="SELECT * FROM usuarios WHERE cedula='$cedula' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
	header("location:prueba100/index.html");
}
else{
	echo "LOS DATOS INGRESADOS SON INCORRECTO";
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>
	    
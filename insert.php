<?php
require ("conexion.php");
 $status = "";
$con=conectar();//variable que almacena la conexión ala base de datos
$nombre=$_REQUEST['nombre'];//capturar datos del formulario
$mail=$_REQUEST['mail'];
$contrasena=$_REQUEST['contrasena'];

$query="insert into usuarios values ('$nombre','$mail','$contrasena')";// cambiar tabla

$cierto=mysql_query($query,$con);//insertar

//preguntar si se insertó el dato
if(!$cierto){
echo "<script>alert('Correo ya en uso')</script>";
echo "<script>setTimeout(\"location.href='login.html'\",1000)</script>";
}
else {
	
echo "<script>alert('Cuenta creada exitosamente')</script>";
echo "<script>setTimeout(\"location.href='login.html'\",1000)</script>";
	
}
?>

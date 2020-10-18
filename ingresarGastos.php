<?php
require ("conexion.php");
 $status = "";
$con=conectar();//variable que almacena la conexión ala base de datos
$Item="";
$Descripcion=$_REQUEST['Descripcion'];
$PrecioPrevisto=$_REQUEST['PrecioPrevisto'];
$PrecioReal=$_REQUEST['PrecioReal'];
$Diferencia=$_REQUEST['Diferencia'];

$query="INSERT INTO gastos VALUES ('$Item','$Descripcion','$PrecioPrevisto','$PrecioReal','$Diferencia')";// cambiar tabla

$cierto=mysql_query($query,$con);//insertar

//preguntar si se insertó el dato
if(!$cierto){
echo "<script>alert('Datos no ingresados')</script>";
echo "<script>setTimeout(\"location.href='ingresarGastos.html'\",1000)</script>";
}
else {
	
echo "<script>alert('Datos Ingresados Correctamente')</script>";
echo "<script>setTimeout(\"location.href='Utilidades.php'\",1000)</script>";
	
}
?>

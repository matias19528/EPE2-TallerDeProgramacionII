<?php
include('conexion.php');//incluye el archivo php que contiene la conexion
$con=conectar();//variable que almacena la conexión ala base de datos
$Item=$_REQUEST['Item'];//capturar codigo del formulario

$query="delete from ganancias where Item='$Item'";//consulta sql

$cierto=mysql_query($query,$con);//eliminandi

//preguntar si se ejecutó la consulta el dato
if(!$cierto){
echo "<script>alert('Datos no eliminados')</script>";
echo "<script>setTimeout(\"location.href='eliminarGastos.html'\",1000)</script>";
}
else {
echo "<script>alert('Datos eliminados correctamente')</script>";
echo "<script>setTimeout(\"location.href='Utilidades.php'\",1000)</script>";
}
?>

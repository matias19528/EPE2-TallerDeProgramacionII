<?php
include('Conexion.php');//incluye el archivo php que contiene la conexion
$con=conectar();//variable que almacena la conexión ala base de datos
if(isset($_REQUEST['editar'])){

$Item=$_REQUEST['Item'];
$Descripcion=$_REQUEST['Descripcion'];
$PrecioPrevisto=$_REQUEST['PrecioPrevisto'];
$PrecioReal=$_REQUEST['PrecioReal'];
$Diferencia=$_REQUEST['Diferencia'];


$queryi="UPDATE gastos SET Descripcion='$Descripcion',PrecioPrevisto='$PrecioPrevisto', PrecioReal='$PrecioReal', Diferencia='$Diferencia' where Item='$Item'";//consulta sql

$res=mysql_query($queryi,$con);//ejecutando consulta

if(!$res){
echo "<script>alert('Dato no modificado')</script>";
echo "<script>setTimeout(\"location.href='editarGastos.html'\",1000)</script>";
}
else {
echo "<script>alert('Dato modificado')</script>";
echo "<script>setTimeout(\"location.href='Utilidades.php'\",1000)</script>";
}
}
?>
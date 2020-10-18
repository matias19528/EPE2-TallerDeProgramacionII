<?php 
//variables
require ("conexion.php");
$status = "";
$con=conectar();
$mail=$_POST['mail'];
$contrasena=$_POST['contrasena'];    	
        
$query="SELECT * FROM usuarios WHERE mail = '$mail' AND contrasena = '$contrasena'";

$res=mysql_query($query,$con);

$rows=mysql_num_rows($res);

//metodo if para mandar mensajes y redireccionar a paginas

if($rows>0){
    echo "<script>alert('Bienvenid@')</script>";
echo "<script>setTimeout(\"location.href='Utilidades.php'\",1000)</script>";
}else{
    echo "<script>alert('Usuario o Contraseña Incorrecta')</script>";
echo "<script>setTimeout(\"location.href='login.html'\",1000)</script>";
}
?>


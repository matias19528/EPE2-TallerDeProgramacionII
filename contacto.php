<?php
//variables
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde Pagina Contacto EPE2";

$mensajeCompleto= $mensaje . "\nAtentamente: " . $nombre;

$destino = 'matias_santis@hotmail.com';

//funcion mail
mail($destino, $asunto, $mensajeCompleto, $header);

//mensaje
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='contacto.html'\",1500)</script>";
?>
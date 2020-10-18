<?php
include("conexion.php");
$con=conectar();
?><!--llamada de la conexion.php-->
<!doctype html>
<html>
<head>
	<!--estructura para el menu-->
	<link href="listaproducto.css" rel="stylesheet" type="text/css">
&nbsp;&nbsp;&nbsp;<a href="Utilidades.php">Utilidades</a>&nbsp;&nbsp;&nbsp;
	<a href="listaproducto.php">Lista de Productos</a>&nbsp;&nbsp;&nbsp;
	<a href="contacto.html">Contacto</a>&nbsp;&nbsp;&nbsp;
	<a href="login.html">Cerrar Sesion</a><br><hr>
</head>

<body>
	<!--creacion de tabla para poder mostrar los productos-->
	<form>
		<table style="text-align: center" border="1">
		<tr>
			<td>codigo</td>
			<td>modelo</td>
			<td>producto</td>
			<td>fabricante</td>
			<td>categoria</td>
			<td>estado</td>
			<td>precio</td>
	  </tr>
		<?php
			$query="SELECT * FROM productos order by codigo desc";
			$res=mysql_query($query, $con);
			while($mostrar=mysql_fetch_array($res)){			
		?>
		<tr>			
			<td><?php echo $mostrar['codigo']?></td>
			<td><?php echo $mostrar['modelo']?></td>
			<td><?php echo $mostrar['producto']?></td>
			<td><?php echo $mostrar['fabricante']?></td>
			<td><?php echo $mostrar['categoria']?></td>
			<td><?php echo $mostrar['estado']?></td>
			<td><?php echo $mostrar['precio']?></td>
	  </tr>
		<?php
			}		
		?>
	</table>
	</form>
	
</body>
</html>

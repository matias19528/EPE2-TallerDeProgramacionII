<?php
include("conexion.php");
$con=conectar();
?><!--llamada de la conexion.php-->

<!doctype html>
<html>
<head>
	<!--estructura para el menu-->
	<link href="Utilidades.css" rel="stylesheet" type="text/css">
&nbsp;&nbsp;&nbsp;<a href="Utilidades.php">Utilidades</a>&nbsp;&nbsp;&nbsp;
	<a href="listaproducto.php">Lista de Productos</a>&nbsp;&nbsp;&nbsp;
	<a href="contacto.html">Contacto</a>&nbsp;&nbsp;&nbsp;
	<a href="login.html">Cerrar Sesion</a><br><hr>	
	
</head>

<body>
	<!--creacion de tabla para poder mostrar, editar y eliminar los productos-->
	<form>
	<h2>Gastos</h2>
	<p>Previsto: 222.00 $</p>
	<p>Precio Real: 257.00 $</p>
	<table style="text-align: center" border="1">
		<tr>
			<td>Item</td>
			<td>Descripcion</td>
			<td>Gasto Previsto</td>
			<td>Gasto Real</td>
			<td>Diferencia</td>			
	  </tr>
		<?php
			$query="SELECT * FROM gastos";
			$res=mysql_query($query, $con);
			while($mostrar=mysql_fetch_array($res)){			
		?>
		<tr>			
			<td><?php echo $mostrar['Item']?></td>
			<td><?php echo $mostrar['Descripcion']?></td>
			<td><?php echo $mostrar['PrecioPrevisto']?></td>
			<td><?php echo $mostrar['PrecioReal']?></td>
			<td><?php echo $mostrar['Diferencia']?></td>						
	  </tr>
		<?php
			}		
		?>
	</table>
	<br>
	</form>
	<br>
<button onClick="window.location.href='ingresarGastos.html'">-Agregar Gastos</button>&nbsp;<button onClick="window.location.href='editarGastos.html'">Editar</button>&nbsp;<button onClick="window.location.href='eliminarGastos.html'">Eliminar</button>
	<!--creacion de tabla para poder mostrar, editar y eliminar los productos-->
	<form>
	<h2>Ganancias</h2>
	<p>Previsto: 700.00 $</p>
	<p>Precio Real: 1052.00 $</p>
	<table style="text-align: center" border="1">
		<tr>
			<td>Item</td>
			<td>Descripcion</td>
			<td>Gasto Previsto</td>
			<td>Gasto Real</td>
			<td>Diferencia</td>
		</tr>
		<?php
			$query="SELECT * FROM ganancias";
			$res=mysql_query($query, $con);
			while($mostrar=mysql_fetch_array($res)){			
		?>
		<tr>			
			<td><?php echo $mostrar['Item']?></td>
			<td><?php echo $mostrar['Descripcion']?></td>
			<td><?php echo $mostrar['PrecioPrevisto']?></td>
			<td><?php echo $mostrar['PrecioReal']?></td>
			<td><?php echo $mostrar['Diferencia']?></td>
			
		</tr>
		<?php
			}		
		?>
	</table>
	<br>
	</form>
	<br>
<button onClick="window.location.href='ingresarGanancias.html'">+Agregar Ganancias</button>&nbsp;<button onClick="window.location.href='editarGanancias.html'" value="editar" name="editar">Editar</button>&nbsp;<button onClick="window.location.href='eliminarGanancias.html'">Eliminar</button>
	
	
</body>
</html>

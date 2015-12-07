<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h1 align="center">Reporte de usuarios</h1>
<br><br>
<?php 
$con=mysql_connect("23.21.99.186","prod_key","prod_key");
mysql_select_db("datosgenerales",$con) or die("no se pudo conectar ");
$sql="SELECT*FROM registro";
$resultado=mysql_db_query("datosgenerales",$sql);

?>
<table align="center" style=" border='1px' ">
<tr>
	<th>codigo</th>
	<th>nombre</th>
	<th>apellido</th>
	<th>email</th>
	<th>ciudad</th>
	<th>direccion</th>
	<th>celular</th>
	<th>comentario</th>
	
</tr>

<?php

while ($fila= mysql_fetch_array($resultado)) {

print " <tr><td>$fila[id]</td> ";
	print " <td>$fila[nombre]</td> ";
		print "<td> $fila[apellido]</td> ";
			print " <td>$fila[email]</td> ";
				print " <td>$fila[ciudad]</td>";
					print " <td>$fila[direccion]</td>";
						print " <td>$fila[celular]</td>";
							print " <td>$fila[comentario]</td></tr>";
							
							
}

mysql_free_result($resultado);
?>
</table>
<br> <br>

<div align="center">
<a href="insertar.php"> Adicionar Registro</a><br>
<a href="actualizar1.php"> Actualiza Registro</a><br>
<a href="eliminar.php"> Borra Registro</a><br>
</div>
</body>
</html>
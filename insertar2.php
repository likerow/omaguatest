<?php


$conexion=mysql_connect("23.21.99.186","prod_key","prod_key");
if($conexion){

	mysql_select_db("prod_test_key_omagua",$conexion);
}

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$ciudad=$_POST["ciudad"];
$direccion=$_POST["direccion"];
$celular=$_POST["celular"];
$comentario=$_POST["comentario"];

mysql_query("INSERT INTO registro VALUES('','$nombre','$apellido','$email','$ciudad','$direccion','$celular','comentario')");
mysql_close($conexion);

?>
<h1><div align="center">Registro Aumentado</div></h1>
<a href="leer_datos.php"> Visualizar Datos</a>

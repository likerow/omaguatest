<?php


$conexion=mysql_connect("localhost","root","sofiaqsy.");
if($conexion){

	mysql_select_db("datosgenerales",$conexion);
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
echo "Sus datos han sido enviados";
?>
<?php

$conexion=mysql_connect("23.21.99.186","prod_key","prod_key");
if($conexion){

	mysql_select_db("prod_test_key_omagua",$conexion);
}

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$ciudad=$_POST["ciudad"];
$sexo=$_POST["sexo"];
$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["p3"];
$p4=$_POST["p4"];
$p5=$_POST["p5"];

mysql_query("INSERT INTO encuesta VALUES('','$nombre','$apellido','$ciudad','$sexo','$p1','$p2','p3','p4','p5')");
mysql_close($conexion);
echo "Sus datos han sido enviados";
?>
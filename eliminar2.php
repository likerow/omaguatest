<html> 
<head><title> Elimina Registros </title>
</head>
<body>
<div align="center"> 
<?php
    $id=$_POST['id'];
    $con=mysql_connect("localhost","root","sofiaqsy.");
    mysql_select_db("datosgenerales",$con) or die("no se pudo conectar");
    $sql="delete from registro where id='$id'";
    mysql_db_query("datosgenerales",$sql)or die("no");
    
?>
</div>
<h1><div align="center">Registro Eliminado</div></h1>
<a href="leer_datos.php"> Visualizar Datos</a>
</body>
</html>

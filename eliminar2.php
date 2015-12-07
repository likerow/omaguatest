<html> 
<head><title> Elimina Registros </title>
</head>
<body>
<div align="center"> 
<?php
    $id=$_POST['id'];
    $con=mysql_connect("23.21.99.186","prod_key","prod_key");
    mysql_select_db("prod_test_key_omagua",$con) or die("no se pudo conectar");
    $sql="delete from registro where id='$id'";
    mysql_db_query("prod_test_key_omagua",$sql)or die("no");
    
?>
</div>
<h1><div align="center">Registro Eliminado</div></h1>
<a href="leer_datos.php"> Visualizar Datos</a>
</body>
</html>

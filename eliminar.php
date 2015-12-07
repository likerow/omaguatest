<html> 
<head><title> Eliminar Registros </title>
</head>
<body>
<div align="center"> 
 <h1>Elimina Registro</h1>
<br><br>
<?php
    $con=mysql_connect("23.21.99.186","prod_key","prod_key");
    mysql_select_db("prod_test_key_omagua",$con);
    echo'<form method="post" action="eliminar2.php">';
    echo'<br>Codigo<br>';
    $sql="select id from registro order by id";
    $resultado=mysql_db_query("prod_test_key_omagua",$sql);
    echo'<select name="id">';
    while($fila=mysql_fetch_array($resultado))
    echo '<option>'.$fila["id"];
?>
</select>
<br>
<input type="submit" value="Eliminar"><br>
</form>
</div>
</body>
</html>
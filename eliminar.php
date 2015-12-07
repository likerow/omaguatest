<html> 
<head><title> Eliminar Registros </title>
</head>
<body>
<div align="center"> 
 <h1>Elimina Registro</h1>
<br><br>
<?php
    $con=mysql_connect("localhost","root","sofiaqsy.");
    mysql_select_db("datosgenerales",$con);
    echo'<form method="post" action="eliminar2.php">';
    echo'<br>Codigo<br>';
    $sql="select id from registro order by id";
    $resultado=mysql_db_query("datosgenerales",$sql);
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
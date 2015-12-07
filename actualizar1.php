<html> 
<head><title> Actualiza Registros </title>
</head>
<body>
<div align="center"> 
 <h1>Actualiza Registro</h1>
<br><br>
<?php
    $con=mysql_connect("23.21.99.186","prod_key","prod_key");
    mysql_select_db("prod_test_key_omagua",$con);
    echo'<form method="post" action="actualiza2.php">';
    echo'<br>Codigo<br>';
    $sql="select id from registro order by id";

    $resultado=mysql_db_query("prod_test_key_omagua",$sql);
    echo'<select name="id">';
    while($fila=mysql_fetch_array($resultado))
    {echo '<option>'.$fila["id"];}
     echo'</select><br>';
     echo"<br>";
?>


<br>
Nombre : <input type="text" name="nombre2"><br>
Apellido : <input type="text" name="apellido2"><br>
Email :<input type="text" name="email2"><br>
Ciudad : <input type="text" name="ciudad2"><br>
Direccion : <input type="text" name="direccion2"><br>
Celular: <input type="text" name="celular2"><br>
Comentario <input type="text" name="comentario2"><br>
<input type="submit" value="Actualizar"><br>
</form>
</div>
</body>
</html>
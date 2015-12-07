<html> 
<head><title> Actualiza Registros </title>
</head>
<body>
<div align="center"> 
<?php
    $id=$_POST['id'];
    $nombre2=$_POST['nombre2'];
    $apellido2=$_POST['apellido2'];
    $email2=$_POST['email2'];
   
    $ciudad2=$_POST['ciudad2'];
     $direccion2=$_POST['direccion2'];
      $celular2=$_POST['celular2'];
    $comentario2=$_POST['comentario2'];
    $con=mysql_connect("localhost","root","sofiaqsy.");
    mysql_select_db("datosgenerales",$con) or die("no");
    $sql="UPDATE registro SET  nombre='$nombre2',apellido='$apellido2',email='$email2',direccion='$direccion2',celular='$celular2' ,ciudad='$ciudad2', comentario='$comentario2' WHERE id='$id'";
    mysql_db_query("datosgenerales",$sql)or die("que no");
    
 

?>
</div>
<h1><div align="center">El registro ha sido actualizado</div></h1>
<a href="leer_datos.php"> Visualizar Datos</a>
</body>
</html>

<html>
<head>
	<title> cafe omagua </title>
</head>
<link rel="stylesheet" type="text/css" href="estilodeomagua.css">


<body background="fondo2.jpg" height="1100px" >
<div   id= "global">
<div id ="head">
<a href="paginapresentar1.php"><img src="Ologo.jpg"  alt="imagen" width="300px" height="100px"></a>
	
</div>
<div id="espaciador"> <p align="right"  style="font-size:12;  font-family:verdana">VILLA RICA </p></div>
<div id="menu">

<a style="text-decoration:none"id="a"href="paginapresentar1.php"> <div id="inicio" > <p class="l"style="font-family:verdana; font-weight:bold"  align="center" >INICIO </p> </div></a>
 <a style="text-decoration:none"id="b" href="paginapresentar2.php"><div id="resena"><p class="l"style="font-family:verdana; font-weight:bold"align="center"> RESE&NtildeA </p> </div></a>
 <a style="text-decoration:none"id="c" href="paginapresentar3.php"> <div id="misionvision"><p class="l"style="font-family:verdana;font-weight:bold "align="center">MISI&OacuteN Y VISI&OacuteN </p> </div></a>
   <a style="text-decoration:none"id="d" href="paginapresentar4.php"> <div id="constitucion"><p class="l" style="font-family:verdana; font-weight:bold "align="center">NUESTRO CAF&Eacute</p> </div></a>
   <a style="text-decoration:none"id="a" href="form.php">   <div id="otro"><p class="l" style="font-family:verdana; font-weight:bold "align="center">CONT&AacuteCTENOS</p> </div></a>

	
</div>
<frameset> <frame id="logo"><img src="Omagua.jpg" alt="imagen aqui" height="419.97146933px" width="1024px">
</frame> </frameset>

<div id="noticias">
<article id="n1">
	<img class="pimg" src="imgb.jpg">
</article>
<article id="n2">
	<center><img class="pimg" src="img2.jpg"></center>
</article>
<article id="n3">
	<img class="pimg" src="imgg">
</article>

	
</div>
<div class ="final">
               <div id="c"><center>  <a style="text-decoration:none"href="form.php"><h2 id="inscri" > Cont&aacute;ctenos </h2></a>
             </center></div>
   <div id="encuesta">
<table>
<tr>
	<td><p id="visitante" class="letra"> Realice nuestra Encuesta <a href="encuesta.php" >aqu&iacute;</a> </p></td>
	<td><p id="seguinos" class="letra"><a class="letrasfinalstyle"style="text-decoration:none" href="paginapresentar1.php"> P&aacute;gina principal</a></p></td>
</tr>
<tr>
	<td><p id="seguinos" class="letra"><a class="letrasfinalstyle" href="promocion.php"> Nuestros planes</p></a></td>
	<td><p id="seguinos" class="letra"><a class="letrasfinalstyle" href="paginapresentar2.php"> Nuestra misi&oacute;n y Visi&oacute;n</a></p></td>
</tr>
<tr>
	<td><p id="seguinos" class="letra"><a class="letrasfinalstyle" href="paginapresentar3.php">Rese&ntilde;a</p></a></td>
	<td><p id="seguinos" class="letra"><a class="letrasfinalstyle"href="paginapresentar4.php">Nuestro caf&eacute;</p></a></td>
</tr>

</table>






               <p id="visitante"><?php 
include("contador.php"); 
echo "Visitante n&uacute;mero : ". contador();
?> </p>



</div>
<div id="siguenos">
	<p id="seguinos">Siguenos en :  <a href="https://www.facebook.com/cafeomagua/?fref=ts"><img src="f" class="dsiguenos"></a>
	               <a href="https://twitter.com/cafeomagua"><img src="twitter" class="dsiguenos"></a></p>
</div>

</div>





</body>
</html>
<html>
<head>
	<title> cafe omagua </title>
</head>
<link rel="stylesheet" type="text/css" href="estilodeomagua.css">
<script type="text/javascript">
function desplegar(valor){
  document.getElementById("vol").style.visibility=valor;
}

function regular(){
var cantidad, total;
cantidad=parseInt(document.getElementById("cantidad").value);

if(cantidad<=1){
  total=20;
}
 else if(cantidad<=2){
  total=17.5*2;
}
 else if(cantidad<=3){
  total=17.5*3;
}
else if(cantidad<=4){
total=15*4
}
else if(cantidad<=5){
  total=15*5;
}
else if(cantidad<=6){
  total=15*6;
}
else if(cantidad<=7){
  total=15*7;
}
else if(cantidad>=8){
  total=13.75*cantidad;
  if(cantidad>=12){
    alert("intente con los planes coporativos");

  }
}
resultado.value=total;
}


function corporativo(){
  var cantidad, total;
  cantidad=parseInt(document.getElementById("cant").value);
  
  if(cantidad>=3){
    
    if(cantidad>=3){
      total=94.3*cantidad;
    }
    else if(cantidad>=5){
      total=92*cantidad;
    }
    else if(cantidad>=7){
      total=90.2*cantidad;
    }
    else if(cantidad >=9 ){
      total=88.8*cantidad;
    }
    }else{
       alert("introduce kilogramos mayores");
    }
    result.value=total;
  }


</script>
<body background="fondo2.jpg" height="1100px">



<div id="vol">
<div id="ventana">
 <a href="javascript: desplegar('hidden'); ">cerrar<br><center></a><h2>
 Tipo de plan :
 </h2><br>
  <form name="form2">
   
  <table>

    <tr>
      <td><h4>Planes regulares</h4> </td><br>
     <div class="planregular">
       <table name ="reg" id="reg">
         <tr>
         <td>Cantidad en unidades : </td>
         <td><input type="text" name="cantidad" id="cantidad">    </td>
         </tr>
         <tr>
           <td>Precio total</td> 
           <td><input type="text" name="resultado" id="resultado"></td>
         </tr>
         <tr><td><input type="button" value ="realizar" onclick="regular();" name="realizar "></td><td> <imput type="reset" value="limpiar" ></td></tr>
       </table>

         <table>

    <tr>
      <td><h4>Planes corporativos</h4> </td><br>
     <div class="plancorporativo">
       <table name ="reg" id="reg">
         <tr>
         <td>Cantidad en kilogramos : </td>
         <td><input type="text" name="cant" id="cant">    </td>
         </tr>
         <tr>
           <td>Precio total</td> 
           <td><input type="text" name="result" id="result"></td>
         </tr>
         <tr><td><input type="button" value ="realizar" onclick="corporativo();" name="realizar "></td><td> <imput type="reset" value="limpiar" ></td></tr>
       </table>

     </div>
    </tr>
    <tr>
      <td><h4>Planes corporativos</h4></td>
      
    </tr>
    </table>
    <br>
  </form></center> 
  </div>
</div>


<div   id= "global">
<div id ="head">
<a id= href="paginapresentar1.php"><img src="Ologo.jpg"  alt="imagen" width="300px" height="100px"></a>
	
</div>
<div id="espaciador"> <p align="right"  style="font-size:12;  font-family:verdana">VILLA RICA </p></div>
<div id="menu">

<a style="text-decoration:none"id="a"href="paginapresentar1.php"> <div id="inicio" > <p class="l"style="font-family:verdana; font-weight:bold"  align="center" >INICIO </p> </div></a>
 <a style="text-decoration:none"id="b" href="paginapresentar2.php"><div id="resena"><p class="l"style="font-family:verdana; font-weight:bold"align="center"> RESE&NtildeA </p> </div></a>
 <a style="text-decoration:none"id="c" href="paginapresentar3.php"> <div id="misionvision"><p class="l"style="font-family:verdana;font-weight:bold "align="center">MISI&OacuteN Y VISI&OacuteN </p> </div></a>
   <a style="text-decoration:none"id="d" href="paginapresentar4.php"> <div id="constitucion"><p class="l" style="font-family:verdana; font-weight:bold "align="center">NUESTRO CAF&Eacute</p> </div></a>
   <a style="text-decoration:none"id="a" href="form.php">   <div id="otro"><p class="l" style="font-family:verdana; font-weight:bold "align="center">CONT&AacuteCTENOS</p> </div></a>
	
</div>
<h2 class="letraplanes">Planes regulares:</h2>
<div id="f"> 
<div>
 <div class="cuadro" >
 	<center><h3>Paquete basico</h3>
 	<p class="descripcion">1 Unidad de 250g de caf&eacute; omagua, tostado y molido</p>
 	<h2>S/ 20.00 </h2>
 	<div class="plomo">
 		<p>Cantidad :1/4 kg <br>
 		Unidades :1<br>
 		Gastos de envio: Si
 		</p>
 		<div class="contacto"><span class="con" >Contactenos</span></div>
 		

 	</div>
 </div>


 <div class="cuadro">
 	<center><h3>Paquete emprendedor</h3>
 	<p class="descripcion">2 Unidad de 250g de caf&eacute; omagua, tostado y molido</p>
 	<h2>S/ 35.00 </h2>
 	<div class="plomo">
 		<p>Cantidad :1/2 kg <br>
 		Unidades : 2<br>
 		Gastos de envio: No
 		</p>
 		<div class="contacto"><span class="con" >Contactenos</span></div>
 		

 	</div></center>
 </div>


 <div class="cuadro">
 	<center><h3>Paquete basico plus</h3>
 	<p class="descripcion">4 Unidad de 250g de caf&eacute; omagua, tostado y molido</p>
 	<h2>S/ 60.00 </h2>
 	<div class="plomo">
 		<p>Cantidad : 1 kg <br>
 		Unidades : 4 <br>
 		Gastos de envio: No
 		</p>
 		<div class="contacto"><span class="con" >Contactenos</span></div>
 		

 	</div>
 </div>


 <div class="cuadro">
 	<center><h3>Paquete basico junnior</h3>
 	<p class="descripcion">8 Unidad de 250g de caf&eacute; omagua, tostado y molido</p>
 	<h2>S/ 110.00 </h2>
 	<div class="plomo">
 		<p>Cantidad : 2 kg <br>
 		Unidades : 8<br>
 		Gastos de envio: No
 		</p>
 		<div class="contacto"><span class="con" >Contactenos</span></div>
 		

 	</div>
 </div>
 </div>
  <div>
 <h2 class="letraplanes">Planes Corporativos:</h2>
 <div class="cuadro2" >
 	<center><h3>Paquete corporativo basico</h3>
 	<p class="descripcion">3 Unidad de 1kg de caf&eacute; omagua, tostado y molido</p>
 	<h2>S/ 283.00 </h2>
 	<div class="plomo">
 		<p>Cantidad :3 kg <br>
 		Unidades : 3<br>
 		Gastos de envio: Si<br>
 		Incluye cafetera
 		</p>
 		<div class="contacto"><span class="con" >Contactenos</span></div>
 		

 	</div></center>
 </div>


 <div class="cuadro2">
 	<center><h3>Paquete corporativo junnior</h3>
 	<p class="descripcion">5 Unidad de 1kg de caf&eacute; omagua, tostado y molido</p>
 	<h2>S/ 460.00 </h2>
 	<div class="plomo">
 		<p>Cantidad :5 kg <br>
 		Unidades : 5 <br>
 		Gastos de envio: Si<br>
 		Incluye cafetera
 		</p>
 		<div class="contacto"><span class="con" >Contactenos</span></div>
 		

 	</div></center>
 </div>


 <div class="cuadro2">
 	<center><h3>Paquete corporativo premiun</h3>
 	<p class="descripcion">7 Unidad de 1kg de caf&eacute; omagua, tostado y molido</p>
 	<h2>S/ 632.00 </h2>
 	<div class="plomo">
 		<p>Cantidad : 7 kg <br>
 		Unidades : 7<br>
 		Gastos de envio: Si<br>
 		Incluye cafetera
 		</p>
 		<div class="contacto"><span class="con" >Contactenos</span></div>
 		

 	</div></center>
 </div>


 <div class="cuadro2">
 	<center><h3>Paquete corporativo gold</h3>
 	<p class="descripcion">9 Unidad de 1kg de caf&eacute; omagua, tostado y molido</p>
 	<h2>S/ 800.00 </h2>
 	<div class="plomo">
 		<p>Cantidad :9 kg <br>
 		Unidades : 9<br>
 		Gastos de envio: Si<br>
 		Incluye cafetera
 		</p>
 		<div class="contacto"><span class="con" >Contactenos</span></div>
 		

 	</div></center>
 </div>



 	
 </div>

</div>



	
</div>
<div class="final" id="indicaciones">
<p>Detalles de cafetera aqu&iacute;</p>
<h4><a href="javascript: desplegar('visible');"> Otros precios</a></h4>
	
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



</div>
<div id="siguenos">
  <p id="seguinos">Siguenos en :  <a href="https://www.facebook.com/cafeomagua/?fref=ts"><img src="f" class="dsiguenos"></a>
                 <a href="https://twitter.com/cafeomagua"><img src="twitter" class="dsiguenos"></a></p>
</div>

</div>





</body>
</html>
<html>
<head>
	<title> cafe omagua </title>
</head>
<link rel="stylesheet" type="text/css" href="estiloform.css">
<script type="text/javascript">
function desplegar(valor){
  document.getElementById("vol").style.visibility=valor;
}
  function validacion(){
    
    var fnom, fapellido, femail, fciu, fcel;
 
     fnom=formun.nom.value;
     fapellido=formun.apellido.value;
     femail=formun.email.value;
     fciu=formun.ciu.value;
     fcel=formun.cel.value;
    
     if(isNaN(fnom)==false){
      alert(" incorrecto, escribe tu nombre ");
     }
     if(isNaN(fapellido)==false){
      alert("incorrecto ,escribe tu apellido");
     }
     if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(femail)==false){
      alert("correo incorrecto");
     }
    
    
     if(isNaN(fcel)==true || fcel<99999999 || fcel>1000000000 ){
      alert("numero de celular incorrecto, vuelva a intentarlo ");
     }
   }
     function costo(){
      var fcant, fenvio, fresultado, d;
      fcant=parseInt(form2.cant.value);
      fenvio=form2.envio.value;
      fenvio=fenvio.toUpperCase();
      if(fcant<8){
      if(fenvio=="SI"){
        fresultado=fcant*20
      }else{
        fresultado=fcant*15;
      }}
      else{
        if(fenvio=="SI"){
          fresultado=(fcant*20)-d;
        }else{
          d=10/100*15*fcant;
           fresultado=(fcant*20)-d;
        }
      }
      form2.resultado.value=fresultado;
     
     
     
  }
</script>

<body background="fondo2.jpg" height="1100px">


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

<div id="espaciador2">aa</div>
<section id="f"> 
           <article id="formu" >
           <h1 id="t">Datos Generales</h1>
           <br>
           <form  method="POST" action="" class="contact" name="formun">
           <table>
              <tr>
              <td for="name">Nombre :</td> <td> <input name="nombre"  id="i1" type="text" placeholder ="juan" required></td></tr>
              <tr>
              <td for="apellidos">Apellido :</td> <td><input  name="apellido" id="i1" type="text" placeholder="casas" required></td></tr><br>
              <tr>
              <td for="email"> Email :</td><td><input id="i1" name="email" type="email" placeholder="alguien@gmail.com" required ><span class="form_hint" ></span></td></tr>     
              <tr>
              <td for="cuidad"> Ciudad : </td><td><input id="i1" name="ciudad" type="text" placeholder="lima"  ></td></tr>
              <tr>
              <td for="direccion"> Direcci&oacute;n :        </td> <td><input id="i1" name="direccion"  type="text" placeholder="av.los girasoles n 234"></td></tr>
              <tr>
              <td for="name"> Celular: </td><td> <input name="celular" id="i1" type="text" placeholder ="948288789" required></td></tr>
              <tr>
              <td> Comentario :</td>
              <tr>
             <td> <tr>
             <td colspan="2"> <textarea rows="6" cols="55" name="comentario"> </textarea style="resize:none;"></td></tr>
           </table>

            <input type="submit" name="submit" value="ENVIAR" onclick="validacion();" >  <input type="reset" value="LIMPIAR">
            </form>

<?php
if(isset($_POST["submit"])){
  include("registro.php");
}
?>



           </article>
           <div id="img1"  ><img id="catarata" src="formu" width="394px">
                 <a style="text-decoration:none" href="promocion.php"><div id="costo"><center> <h2 id="inscribete" >Nuestros  planes</h2></center></div></a>
           </div>


  </section>
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
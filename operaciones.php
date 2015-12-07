<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript">
	function operaciones(){
	var n1,n2,su,re,mu,di;
	n1=parseInt(form.n1.value);
	n2=parseInt(form.n2.value);
	su=n1+n2;
	re=n1-n2;
	mu=n1*n2;
	di=n1/n2;
	form.s.value=su;
	form.r.value=re;
	form.m.value=mu;
	form.d.value=di;

	}
	</script>
</head>
<body>
<h2>CUATRO OPERACIONES</h2>
<form name="form">
	<table>
		<tr>
			<td>primer numero:</td>
			<td><input type="text" name="n1"></td>
		</tr>
		<tr>
			<td>segundo numero:</td>
			<td><input type="text" name="n2"></td>
		</tr>
		<tr>
			<td>la suma es</td>
			<td><input type="text" name="s"></td>
		</tr>
		<tr>
			<td>la resta es</td>
			<td><input type="text" name="r"></td>
		</tr>
		<tr>
			<td>la multiplicacion es</td>
			<td><input type="text" name="m"></td>
		</tr>
		<tr>
			<td>la division es</td>
			<td><input type="text" name="d"></td>
		</tr>
	</table>
	<input type="reset" value="limpiar">  <input type="button" value="operar" name="operador" onclick="operaciones();">
</form>
<h2>area</h2>

     <form name="areas">
     	<tr>
     		<td>lado</td>
     		<td></td>
     	</tr>
     	<tr>
     		<td></td>
     		<td></td>
     	</tr>
     </form>
	
</body>
</html>
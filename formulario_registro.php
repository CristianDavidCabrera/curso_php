<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario de registro</title>
<style>

h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #0000FF;
	width:50%;
	margin:auto;
	
	
}

table{
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
}

body{
	background-color:#FFC;
}


</style>
</head>

<body>
<h1>Registro de Vehículos</h1>
<form name="form1" method="get" action="insertar_registro.php">
  <table border="0" align="center">
    <tr>
      <td>Matrícula</td>
      <td><label for="matricula"></label>
      <input type="text" name="matricula" id="matricula"></td>
    </tr>
    <tr>
      <td>Tipo</td>
      <td><label for="tipo"></label>
      <input type="text" name="tipo" id="tipo"></td>
    </tr>
    <tr>
      <td>Marca</td>
      <td><label for="marca"></label>
      <input type="text" name="marca" id="marca"></td>
    </tr>
    <tr>
      <td>Importe</td>
      <td><label for="importe"></label>
      <input type="text" name="importe" id="importe"></td>
    </tr>
    <tr>
      <td>Fecha de compra</td>
      <td><label for="fechaCompra"></label>
      <input type="text" name="fechaCompra" id="fechaCompra"></td>
    </tr>
    <tr>
      <td>ITV</td>
      <td><label for="itv"></label>
      <input type="text" name="itv" id="itv"></td>
    </tr>
    <tr>
      <td>Color</td>
      <td><label for="color"></label>
      <input type="text" name="color" id="color"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>
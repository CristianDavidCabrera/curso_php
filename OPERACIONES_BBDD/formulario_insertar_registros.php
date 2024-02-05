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
<h1>Alta de artículos nuevos</h1>
<form name="form1" method="get" action="resultados_insertar_registro.php">
  <table border="0" align="center">
    <tr>
      <td>Código Artículo</td>
      <td><label for="Código Artículo"></label>
      <input type="text" name="c_art" id="c_art"></td>
    </tr>
    <tr>
      <td>Sección</td>
      <td><label for="Sección"></label>
      <input type="text" name="secc" id="secc"></td>
    </tr>
    <tr>
      <td>Nombre Artículo</td>
      <td><label for="Nombre Artículo"></label>
      <input type="text" name="n_art" id="n_art"></td>
    </tr>
    <tr>
      <td>Precio</td>
      <td><label for="Precio"></label>
      <input type="int" name="pre" id="pre"></td>
    </tr>
    <tr>
      <td>Fecha</td>
      <td><label for="Fecha"></label>
      <input type="date" name="fech" id="fech"></td>
    </tr>
    <tr>
      <td>Importado</td>
      <td><label for="importado"></label>
      <input type="text" name="imp" id="imp"></td>
    </tr>
    <tr>
      <td>País de Origen</td>
      <td><label for="País de Origen"></label>
      <input type="text" name="p_ori" id="p_ori"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
    </tr>
  </table>
</form>
</body>
</html>
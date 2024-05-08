<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario busqueda PDO</title>
<style>

    table{
        width: 300px;
        margin: auto;
        background-color: #ffc;
        border: 2px solid #f00;
        padding: 5px;
    }

    td{
        text-align: right;

    }
    td input {
        margin-left: 5px;
    }

</style>
</head>

<body>
    <form action="pagina_insertar_pdo.php" method="POST">
        <table>
        <tr>
                <td>C.Artículo:<input type="text" name="c_art" id="c_art"></td>
            </tr>
            <tr>
                <td>Sección:<input type="text" name="seccion" id="seccion"></td>
            </tr>
            <tr>
                <td>Nombre Art:<input type="text" name="n_art" id="n_art"></td>
            </tr>
            <tr>
                <td>Precio:<input type="text" name="precio" id="precio"></td>
            </tr>
            <tr>
                <td>Fecha:<input type="text" name="fecha" id="fecha"></td>
            </tr>
            <tr>
                <td>Importado:<input type="text" name="importado" id="importado"></td>
            </tr>
            <tr>
                <td>País origen:<input type="text" name="p_orig" id="p_orig"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviando" value="Dale!"></td>
            </tr>
        </table>
    </form>

</body>

</html>
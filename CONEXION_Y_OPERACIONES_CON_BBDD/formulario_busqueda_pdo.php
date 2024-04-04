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
        text-align: center;
    }

</style>
</head>

<body>
    <form action="pagina_busqueda_pdo.php" method="get">
        <table>
            <tr>
                <td>Sección:<input type="text" name="seccion"></td>
            </tr>
            <tr>
                <td>País origen:<input type="text" name="p_orig"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviando" value="Dale!"></td>
            </tr>
        </table>
    </form>

</body>

</html>
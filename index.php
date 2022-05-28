<!DOCTYPE html>
<html>
    <head>
        <title>Página de ejemplo IFTS18</title>
        <link rel="stylesheet" href="estilos.css">
    </head>

    <body>
        <h1>Lista de ejemplo</h1>
        <a href="compras.php">Soy un vinculo a la página de compras</a>
        <hr>
        <table border="1">
            <tr>
                <td class="titulos">
                    Nombre
                </td>
                <td class="titulos">
                    Apellido
                </td>
                <td class="titulos">
                    e-Mail
                </td>
                <td class="titulos">
                    Acciones
                </td>
            </tr>
        <?php
        for($i=0;$i<10;$i++)
        {
        ?>
            <tr>
                <td class="lista">
                    a
                </td>
                <td class="lista">
                    b
                </td>
                <td class="lista">
                    e-c
                </td>
                <td class="lista">
                    <input type="button" value="Editar">
                </td>
            </tr>
        <?php
        };
        ?>
        </table>
        <p>Este es un párrafo de ejemplo</p>
    </body>
</html>
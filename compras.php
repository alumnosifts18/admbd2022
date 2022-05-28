<?php

#conectar a la DB
$servername = "localhost";
$database = "ediciones_azul";
$username = "root";
$password = "";
// crea la conexion
$conn = mysqli_connect($servername, $username, $password, $database);
// Cche quear la conexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
#echo "Connected successfully";
$resultado = $conn->query("SELECT * FROM clientes");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Compras</title>
        <link rel="stylesheet" href="estilos.css">
    </head>

    <body>
        <a href="index.php">Soy un vinculo a la página inicial</a>
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
        while ($row=mysqli_fetch_array($resultado))
        {
        ?>
            <tr>
                <td>
                    <?php
                        echo $row["nombre"];
                    ?>
                </td>
                <td>
                    <?php
                        echo $row["apellido"];
                    ?>
                </td>
                <td>
                    <?php
                        echo $row["email"];
                    ?>
                </td>
                <td>
                    <input type="button" value="Editar">
                </td>
            </tr>
        <?php
        };
        ?>
        </table>

    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    session_start();

    if(!isset($_SESSION["usuario"])){

        header("location:login.php");
    }

    ?>
    <h1>BIENVENIDO</h1>

    <?php

        echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
        
    ?>

    <p><a href="cierre.php">Cierra Sesion</a></p>

    <p>Esto es informacion solo para usuarios registrados</p>
    <table width="489" heigth="187" border="1">
        <tr>
            <td colspan="3" align="center">Zona usuarios registrados</td>
        </tr>
        <tr>
            <td><a href="usuarios_registrados2.php">Pagina 1</a></td>
            <td><a href="usuarios_registrados3.php">Pagina 2</a></td>
            <td><a href="usuarios_registrados4.php">Pagina 3</a></td>
        </tr>
    </table>
</body>
</html>
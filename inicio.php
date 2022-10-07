
<?php

session_start();

if (empty($_SESSION['idUsuario'])) {
    header("location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- <nav class="navbar navbar-dark bg-dark navbar-expand-md navbar-light bg-light fixed-top"> -->
        <div class="text-white bg-succes p-2">
            <?php
              echo $_SESSION["nombre"]." ".$_SESSION["apellido"] ;
            ?>
        </div>
    <!-- </nav> -->

    <table class="table table-light">
        <tbody>
            <tr>
                <td>soy una pestaña</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
            </tr>
        </tfoot>
    </table>

    <a href="controlador/cerrarSesion.php">Salir</a>


</body>
</html>
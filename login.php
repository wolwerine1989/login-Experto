<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
</head>
<body>
    
    <img class="wave" src="">
    <div class="container">
        <div class="img">

        </div>
        <div class="login-content">
            <form action="" method="post">
                <img src="" alt="">
                    <h2 class="title">Bienvenidos</h2>
                        <?php
                        include ("modelo/conexion.php");
                            include ("controlador/controladorLogin.php");
                        ?>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                <div class="div">
                    <h5>Usuario</h5>
                        <input type="text" name="usuario" class="input" id="usuario">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                <div class="div">
                    <h5>contraseña</h5>
                    <input type="password" name="password" class="input" id="input">
                </div>
                </div>

                <div class="view">
                    <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword">
                    </div>
                </div>

                <div class="text-center">
                    <a class="font-italic isai5" href="">Olvide mi contraseña</a>
                    <a class="font-italic isai5" href="">Registrarse</a>
                </div>

                <input type="submit" name="ingresar" class="btn" value="iniciar sesion">

            </form>
        </div>

    </div>


</body>
</html>
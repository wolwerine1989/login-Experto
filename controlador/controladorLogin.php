<?php

session_start();
if (!empty($_POST["ingresar"])) 
{
    if (!empty($_POST["usuario"]) and !empty($_POST["clave"])) {
      $usuario = $_POST["usuario"];  
      $clave = $_POST["clave"];

      echo $usuario;
      echo $password;

      $sql = $conexion->query("SELECT * FROM usuario WHERE usuario='$usuario' AND clave='$clave'");
      if ($datos = $sql->fetch_object()) {
            $_SESSION["idUsuario"]=$datos->idUsuario;
            $_SESSION["nombres"]=$datos->nombres;
            $_SESSION["apellidos"]=$datos->apellidos;
            header("location: inicio.php");
      }else{
        echo "<div class='alert alert-danger'>Acceso denegado</div>";
      }
    }

}else{
    echo "campos vacios";
}


?>
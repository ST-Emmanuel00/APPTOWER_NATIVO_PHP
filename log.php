<?php
    
    require "./conexion_DB.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contraseña'];

    $datos_usuario = verificar_usuario($usuario, $contrasena);

    if ($datos_usuario) {

        session_start();
        $_SESSION["usuario"] = $usuario;

        header("Location: listar_espacios.php");

        exit();

    } else {

        echo 'Usuario o contraseña incorrectos';

        header("Location: index.php");

        exit();
    }

}


function verificar_usuario($usuario, $contrasena)
{
    global $db;

    $consulta = $db->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
    $consulta->bindParam(':usuario', $usuario);
    $consulta->execute();

    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    if ($resultado && password_verify($contrasena, $resultado['contrasena'])) {

        return $resultado;

    } else {

        return false;

    }
}

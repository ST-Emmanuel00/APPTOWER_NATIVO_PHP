<?php 

include "inicio_sesion.php";
    
require "conexion_DB.php";

if (isset($_GET["id"])) {
    
    $item = $_GET["id"];
    print_r($item);

    $ELIMINARITEM = $db -> prepare("DELETE FROM espacios where id_espacios = :id");

    $ELIMINARITEM -> bindParam(":id", $item);

    $ELIMINARITEM -> execute();

    header("Location: listar_espacios.php");
    exit();


}

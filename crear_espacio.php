<?php

include "inicio_sesion.php";
require "./conexion_DB.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tipo_espacio = $_POST["tipo_espacio"];
    $espacio = $_POST["espacio"];
    $capacidad = $_POST["capacidad"];
    $estado = $_POST["estado"];

    $INSERTSQL = $db->prepare('INSERT INTO espacios (tipo_espacio, nombre_espacio, capacidad, estado) 
    VALUES (:tipo_espacio,:nombre_espacio,:capacidad,:estado)');

    $INSERTSQL->bindParam(':tipo_espacio', $tipo_espacio);
    $INSERTSQL->bindParam(':nombre_espacio', $espacio);
    $INSERTSQL->bindParam(':capacidad', $capacidad);
    $INSERTSQL->bindParam(':estado', $estado);
    $INSERTSQL->execute();

    header("Location: listar_espacios.php");
    exit();
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear espacio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="./ASSETS/style.css">
</head>

<body>

    <?php include "./PLANTILLA/nav.php" ?>

    <div id="contenedor_form">

        <form id="form" method="POST">

            <div class="mb-3">
                <h1>Crear espacio</h1>
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo espacio</label>
                <select id="tipo_espacio" name="tipo_espacio" onchange="borrarCapacidad()" class="form-select">
                    <option value="">Escoje una opcion</option>
                    <option value="APARTAMENTO">APARTAMENTO</option>
                    <option value="PARQUEADERO">PARQUEADERO</option>
                    <option value="SALON SOCIAL">SALON SOCIAL</option>
                    <option value="ZONA HUMEDA">ZONA HUMEDA</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Espacio</label>
                <input type="text" id="espacio" name="espacio" onchange="this.value = this.value.toUpperCase()" class="form-control" placeholder="Ejemplo: 101">
            </div>
            <div id="divcapacidad" class="mb-3">
                <label class="form-label">Capacidad</label>
                <input type="number" id="capacidad" name="capacidad" class="form-control" min="0" placeholder="Ejemplo: 3">
            </div>

            <div class="mb-3">
                <label class="form-label">Estado</label>
                <select id="estado" name="estado" class="form-select">
                    <option value="ACTIVO">ACTIVO</option>
                    <option value="INACTIVO">INACTIVO</option>
                </select>
            </div>

            <div id="botones">
                <button  type="submit" class="btn btn-success" onclick="volver()">Crear espacio</button>
                <a href="listar_espacios.php" id="volver" class="btn btn-light" >Volver</a>
            </div>


        </form>
    </div>


    <?php include "./PLANTILLA/footer.php" ?>

    <script src="./ASSETS/main.js"></script>



</body>

</html>
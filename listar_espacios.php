<?php

include "inicio_sesion.php";

require "conexion_DB.php";

$SELECSQL = $db->prepare('SELECT * FROM espacios');
$SELECSQL->execute();
$listar = $SELECSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espacios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./ASSETS/style.css">

</head>

<body>

    <?php include "./PLANTILLA/nav.php" ?>


    <div id="contenedor">


        <div id="contenedor_funciones">

            <a id="boto_crear_electrodomestico" href="./crear_espacio.php" class="btn btn-primary"> + Agregar espacio</a>

        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id_espacio</th>
                    <th scope="col">Tipo espacio</th>
                    <th scope="col">Nombre espacio</th>
                    <th scope="col">Capacidsad</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php

                foreach ($listar as $item) { ?>
                    <tr>
                        <td scope="row"><?php echo $item["id_espacios"] ?></td>
                        <td scope="row"><?php echo $item["tipo_espacio"] ?></td>
                        <td><?php echo $item["nombre_espacio"] ?></td>
                        <td><?php echo $item["capacidad"] ?></td>
                        <td><?php echo $item["estado"] ?></td>
                        <td>

                            <a href="./editar_espacio.php?id=<?php echo $item["id_espacios"] ?>" class="btn btn-warning">Editar</a>
                            <a href="./eliminar_espacio.php?id=<?php echo $item["id_espacios"] ?>" class="btn btn-danger">Eliminar</a>

                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php include "./PLANTILLA/footer.php" ?>



    <!-- <footer class="py-5 bg-dark">
        <div>
            <p class="m-0 text-center text-white">2559218 | Emmanuel Tabares Ortiz</p>
        </div>
    </footer> -->

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppTower 🍃</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./ASSETS/style.css">
</head>

<body id="body">

    <div id="contenedor_form">

        <form id="form2" action="./log.php" method="POST">
            <div id="titulo">
                <h1 >APPTOWER 🍃</h1>
            </div>


            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña">
            </div>
            <button id="boton_ingresar" type="submit" class="btn btn-success">Ingresar</button>
        </form>
    </div>


</body>

</html>
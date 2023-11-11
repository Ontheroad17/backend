<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Punto # 3</title>
</head>
<body>
    <form action="envio_datos_tres.php" method="GET">
    <div class="form-row">
        <div class="form-goup col-md-4">
        <label for="nombre">NOMBRE</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Digite su nombre" required>
        </div>

        <div class="form-goup col-md-4">
        <label for="apellido">APELLIDO</label>
        <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Digite su apellido"required>
        </div>

        <div class="form-goup col-md-4">
        <label for="cedula">CEDULA</label>
        <input type="number" name="cedula" class="form-control" id="cedula" placeholder="Digite su cedula"required>
        </div>
    </div>
    <div class="form-row">
        

    </div>
    <button type="submit" name="datos" class="btn btn-primary">Ok</button>
    </form>   

</body>
</html>
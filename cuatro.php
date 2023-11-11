<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Punto # 4</title>
</head>
<body>
    <form action="cuatro.php" method="POST">
    <div class="form-row">
        <div class="form-goup col-md-5">
        <label for="fecha">Fecha de nacimiento</label>
        <input type="date" name="fecha" class="form-control" id="fecha" required>
        </div> -º      
    </div>
    
    <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
    </form>   

<?php
if (isset($_POST['calcular'])) {
    $fechaI = $_POST['fecha'];
    $fecha_actualI = date('Y-m-d')
    
    $fecha = new Datetime($_POST['fecha']);
    $fecha_actual = new Datetime(date('Y-m-d'));
    
    $diferencia = $fecha->diff($fecha_actual)

    $año=diff->y;
    $mes=diff->m;
    $dia=diff->d;   
    }


    echo 'Fecha de nacimiento: '.$fechaI.'<br>'.
                'Fecha actual: '.$fecha_actualI.'<br>'.
                     'Su Edad: '.$año.' Año(s), '.$mes.' mes(es), '.$dia.' dia(s).';

}
?>
</body>
</html>


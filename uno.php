<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Punto # 1</title>
</head>
<body>
    <form action="uno.php" method="POST">
    <div class="form-row">
        <div class="form-goup col-md-5">
        <label for="n1">numero 1</label>
        <input type="number" step="any" name="n1" class="form-control" id="n1" placeholder="Digite un numero" required>
        </div>

        <div class="form-goup col-md-5">
        <label for="n2">numero 2</label>
        <input type="number" step="any" name="n2" class="form-control" id="n2" placeholder="Digite un numero"required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-10">
        <label for="opcion">Seleccione la operacion a realizar</label>
        <select name="op" id="opcion" class="form-control" required>
            <option value="">Seleccione una opcion: </option>
            <option value="1">SUMA</option>
            <option value="2">RESTA</option>
            <option value="3">MULTIPLICACION</option>
            <option value="4">DIVISION</option>
        </select>
        </div>

    </div>
    <button type="submit" name="ejecutar" class="btn btn-primary">Ejecutar</button>
    </form>   
<?php
if (isset($_POST['ejecutar'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op = $_POST['op'];

    switch ($op) {
        case '1':
            $tot=$n1+$n2;
            $ej='SUMA';
            break;
        case '2':
            $tot=$n1-$n2;
            $ej='RESTA';
            break;
        case '3':
            $tot=$n1*$n2;
            $ej='MULTIPLICACION';
            break;
        case '4':
            $tot=$n1/$n2;
            $ej='DIVISION';
            break;
        
    }
    echo '<h1> La '.$ej.' entre el numero '.$n1.' y el numero '.$n2.'es igual a '.$tot.'</h1>';
}
?>
</body>
</html>


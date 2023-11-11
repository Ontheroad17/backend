<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Punto # 2</title>
</head>
<body>
    <form action="dos.php" method="POST">
    <div class="form-row">
        <div class="form-goup col-md-3">
        <label for="edad">EDAD</label>
        <input type="number" name="edad" class="form-control" id="edad" placeholder="Digite su edad." required>
        </div>
        
    </div>
    
    <button type="submit" name="ejecutar" class="btn btn-primary">Ejecutar</button>
    </form>   
<?php
if (isset($_POST['ejecutar'])) {
    $edad = $_POST['edad'];
    
    if($edad>0 && $edad<17){
        echo '<h1>Usted es menor de edad!. ya hizo la tarea?...</h1>'
    }
    if($edad>=18 && $edad<100){
        echo '<h1>Usted es mayor de edad!. ya pago sus impuestos?...</h1>'
    }if($edad<=0 || $edad>=100){
        echo '<h1>Usted digito una edad incorrecta...</h1>'
    }
   
}
?>
</body>
</html>
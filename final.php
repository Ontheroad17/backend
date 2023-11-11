<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.18.0/bootstrap-table.min.css">
    <title>TABLA DB</title>
</head>
<body>

<div class="container">
<h1>Bootstrap Tables</h1>

<p>Una tabla con extensión de integración de terceros Extensión de control de filtro Exportación de datos para exportador</p>

<div id="toolbar">
		<select class="form-control">
				<option value="">Export Basic</option>
				<option value="all">Export All</option>
				<option value="selected">Export Selected</option>
		</select>
</div>

<table id="table" 
			 data-toggle="table"
			 data-search="true"
			 data-filter-control="true" 
			 data-show-export="true"
			 data-click-to-select="true"
			 data-toolbar="#toolbar"
       class="table-responsive">
	<thead>
		<tr>
            <th data-field="id" data-checkbox="true"></th>
            <th data-field="id" data-filter-control="input" data-sortable="true">id</th>
			<th data-field="nombre" data-filter-control="input" data-sortable="true">nombre</th>
			<th data-field="apellido" data-filter-control="select" data-sortable="true">apellido</th>
			<th data-field="cedula" data-filter-control="select" data-sortable="true">cedula</th>
			
	</thead>
	<tbody>
        <?php

        # include 'db/conexion.php';
        #  $query =mysqli_query($conexion, "SELECT * FROM usuarios")
        
        $host = 'localhost';
        $usuario = 'root';
        $contraseña = '';
        $basedatos = 'mi_proyecto';

        $conexion = new mysqli($host,$usuario,$contraseña,$basedatos);
        
        if($conexion->connect_error){
            echo "Fallo en conexion";
            exit();
        }
        
        $sql = "SELECT * FROM usuarios";
        $result = $conexion->query($sql);

        while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td></td>"; 
                echo "<td>" . $row['id'] . "</td>";  
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['apellido'] . "</td>";
                echo "<td>" . $row['cedula'] . "</td>";  
                echo     "</tr>";
                }
                $conexion->close();
                    
        ?>	
	</tbody>
</table>
</div>



<script> src = "js/script.js"</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.18.0/bootstrap-table.min.js"></script>
        
</body>
</html>

<!-- // Extraido de: https://codepen.io/JohanAntonyAS/pen/MZYEjv  -->

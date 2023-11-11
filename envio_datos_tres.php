<?php
if (isset($_GET['datos'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $cedula = $_GET['cedula'];

        echo '<h1>Nombre: '.$nombre.' </h1>'
        echo '<h1>Apellido: '.$apellido.'</h1>'
        echo '<h1>Cedula: '.$cedula.' </h1>'
    }
   
}
?>
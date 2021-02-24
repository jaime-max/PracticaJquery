<?php
    $conexion = mysqli_connect('localhost','jaime','jaime1234','tasks_app');
    if(!$conexion){
    echo "<p> Error al conectar la base de datos" . mysql_connect_error() . "</p>"; 
    }
?>
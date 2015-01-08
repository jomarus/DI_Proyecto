
<?php
    //1. Crear la conexion a la base de datos
    $conexion = mysql_connect("localhost","root","");

    //2. Seleccionar base de datos
    $db_select = mysql_select_db("cursos_photocad",$conexion);
?>
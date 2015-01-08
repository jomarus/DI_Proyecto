
<?php
    session_start();
    session_unset(); //borra el contenido de las variables
    session_destroy(); //elimina las sesiones
    header("Location: index.php "); //redireccion a index
?>

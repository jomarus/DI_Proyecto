
<?php include_once("conexion.php");?>

<?php

    session_start();

    if(isset($_SESSION['userName'])){
        echo "<br/>Bienvenido a tu pagina personal ".$_SESSION['userName'];

        echo "<br/><a href='logout.php'>LogOut</a>";

    }else{
        echo "No ha iniciado sesion <br/><a href='formularioLogin.php'>LogIn</a>";
        header("Location: formularioLogin.php ");
        //header("Location: http://www.google.es ");

        exit;
    }

?>

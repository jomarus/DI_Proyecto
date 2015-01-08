
<?php include_once("conexion.php");
session_start();
?>

<?php

    //Recoger constantes POST desde formularioLogin
    $usuario= $_POST["user"];
    $password= $_POST["pass"];

    //Buscar coincidencias en la BD
    $sql = "SELECT count(*) FROM usuarios WHERE (usuario='$usuario'and password='$password')";
    $qury = mysql_query($sql);

    //Asignar query como array
    $result = mysql_fetch_array($qury);

    //Si existe alguna coincidencia
    if($result[0]>0){
        $_SESSION['userName']=$usuario;             //Activar Sesion
        header("Location: paginaPersonal.php ");    //Redireccionar a paginaPersonal
    }else{
        echo "<br/>El login ha fallado";
        echo "<br/><a href='formularioLogin.php'>Login</a>";
        echo "<br/><a href='formularioRegistro.php'>Registro</a>";
        echo "<br/><a href='index.php'>Inicio</a>";
    }



?>


<?php include_once("conexion.php") ?>

<?php

    //Recoger constantes POST desde formularioRegistro
    $user= $_POST["usuario"];
    $password= $_POST["password"];

    // Prints the day, date, month, year, time, AM or PM
    $fecha=date("l jS F Y h:i:s A");

    //Buscar coincidencias en la BD
    $sql = "SELECT count(*) FROM usuarios WHERE (usuario='$user')";
    $qury = mysql_query($sql);

    //Asignar query como array
    $result = mysql_fetch_array($qury);

    //Si existe alguna coincidencia
    if($result[0]>0){
        // This is in the PHP file and sends a Javascript alert to the client
        header("Location: registroError.php ");    //Redireccionar a paginaPersonal
    }else{
        //INSERT
        $sql = "INSERT INTO usuarios (usuario,password,fecha)values('$user','$password','$fecha')";
        $qury = mysql_query($sql);

        //SELECT
        $result=mysql_query("SELECT * FROM usuarios",$conexion);


        if(!$qury){
            echo "Fallo en la ejecucion ".mysql_error()."<br/>";
            echo "<a href='formularioRegistro.php'>Registro</a>";
        }else{
            echo "Nuevo usuario registrado.<br/><br/>";
            //Listar filas
            while($row = mysql_fetch_array($result)){
                echo $row["id"]." ".$row["usuario"]." ".$row["password"]." ".$row["fecha"]."<br/>";
            }
            echo "<br/>";
            echo "<a href='formularioLogin.php'>Login</a>";

        }
    }
?>

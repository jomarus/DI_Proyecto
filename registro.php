
<?php include_once("conexion.php") ?>

<?php
    //Recoger constantes POST desde formularioRegistro
    $user= $_POST["usuario"];
    $password= $_POST["password"];

    // Prints the day, date, month, year, time, AM or PM
    $fecha=date("H:i:s j-n-Y");

    //Buscar coincidencias en la BD
    $sql = "SELECT count(*) FROM estudiantes WHERE (usuario='$user')";
    $qury = mysql_query($sql);

    //Asignar query como array
    $result = mysql_fetch_array($qury);

    //Si existe alguna coincidencia
    if($result[0]>0){
        // This is in the PHP file and sends a Javascript alert to the client
        echo "<div>El usuario ya esta registrado</div>";
    }else{
        //INSERT
        $sql = "INSERT INTO estudiantes(usuario,password,fecha) values('$user','$password','$fecha')";
       $qury = mysql_query($sql);
        header("Location: cursosIndex.html ");
    }

?>


<html>
    <head>
        <style>
            *{
                background-color: #a9c6c9;
            }
            table{
                width: 100%;
                border-collapse: collapse;
                border: 1px solid black;
                text-align: center;
            }
            td {
                border-collapse: collapse;
                border: 1px solid black;
                text-align: center;
            }
            th {
                background-color: green;
                color: white;
            }
            input{
                width: 100px;
                height: 100px;
                background-color: red;
            }
            input:hover{
                background-color: green;
            }
        </style>
    </head>
    <body>
    <?php echo
        "<h1>Pagina de administracion</h1>";

        include_once("conexion.php");

        //Asignar query como array
        $result=mysql_query("SELECT * FROM usuarios",$conexion);


    ?>
    <?php echo "<a href='index.php'>Inicio</a>"; ?>

    <?php

    $user="Usuario";
    $password="Contrasena";

    if (isset($_POST['refrescar']))   {
        //Listar filas
        echo "<table>";
        while($row = mysql_fetch_array($result)){
            echo "<tr><td>".$row["id"]."</td><td>".$row["usuario"]."</td><td>".$row["password"]."</td></tr>";
        }
        echo "</table>";
    } elseif ( isset($_POST['insertar']) )   {
        $sql = "INSERT INTO usuarios (usuario,password)values('$user','$password')";
        $qury = mysql_query($sql);

    } elseif ( isset($_POST['borrar']) )   {
        $sql = "DELETE FROM usuarios WHERE (usuario='$user')";
        $qury = mysql_query($sql);
    }

    ?>



    <form action="paginaAdmin.php" method="post">
        <input type="submit" name="refrescar" value="Refrescar" />
        <input type="submit" name="insertar" value="Insertar" />
        <input type="submit" name="borrar" value="Borrar" />
    </form>
    </body>

</html>

<?php
    $to="jomarus1984@hotmail.com";
    $subject="Recuperar password";
    $message="Hola buenas soy un mensaje";

    mail($to,$subject,$message );
    echo "mail enviado a $to<br/>";
    echo "<a href='index.php'>Inicio</a><br/>";
?>

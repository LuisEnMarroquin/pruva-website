<?php
    $destino = 'danyxlmlx@gmail.com';
    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $asunto = 'Benefactor "'.$nombre.'" interesado';

    $contenido = "<h3>Nombre: ".$nombre."</h3>";
    $contenido .= "<p><b>Correo: </b>".$correo."</p>";

    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    mail($destino,$asunto,$contenido,$cabeceras);
    //redirecciona a una pagina
    header("Location:../enviado.html");
?>

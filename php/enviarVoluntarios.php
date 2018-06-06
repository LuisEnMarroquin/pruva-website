<?php
    $destino = 'danyxlmlx@gmail.com';
    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $telefono = $_POST['subject'];
    $descripcion = $_POST['message'];
//falta el archivo adjunto
    $contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nTelefono: ".$telefono."\nBreve Descripcion: ".$descripcion;

    mail($destino,"Alianza interesada",$contenido);
    //redirecciona a una pagina
    header("Location:enviado.html");
?>

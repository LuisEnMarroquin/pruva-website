<?php
    $destino = 'danyxlmlx@gmail.com';
    $nombre = $_POST['name'];
    $correo = $_POST['email'];

    $contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nTelefono: ".$telefono."\nBreve Descripcion: ".$descripcion;

    mail($destino,"Benefactor interesado",$contenido);
    //redirecciona a una pagina
    header("Location:enviado.html");
?>

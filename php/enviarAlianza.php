<?php
  $destino = 'barbaras.martinez@udem.edu';
  $nombre = $_POST['name'];
  $correo = $_POST['email'];
  $telefono = $_POST['subject'];
  $descripcion = $_POST['message'];
  $asunto = 'Alianza "'.$nombre.'" interesada';

  $contenido = "<h3>Nombre: ".$nombre."</h3>";
  $contenido .= "<p><b>Correo: </b>".$correo."</p>";
  $contenido .= "<p><b>Telefono: </b>".$telefono."</p>";
  $contenido .= "<p><b>Breve Descripcion: </b>".$descripcion."</p>";

  $cabeceras = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  mail($destino,$asunto,$contenido,$cabeceras);
  //redirecciona a una pagina
  header("Location:../enviado.html");
?>

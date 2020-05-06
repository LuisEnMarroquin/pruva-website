<?php
  $destino = 'barbaras.martinez@udem.edu';
  $nombre = $_POST['name'];
  $correo = $_POST['email'];
  // quitar el telefono del estudiante
  $telefono = $_POST['subject'];
  // quitar los face del tutor y del estudiante
  $facebook = $_POST['facebook'];
  $secundaria = $_POST['secundaria'];
  $tutor = $_POST['tutor'];
  $correoTutor = $_POST['emailTutor'];
  $telefonoTutor = $_POST['telefonoTutor'];
  $facebookTutor = $_POST['facebookTutor'];
  $asunto = 'Estudiante "'.$nombre.'" interesado';

  $contenido = "<h3>Nombre del estudiante: ".$nombre."</h3>";
  $contenido .= "<p><b>Correo: </b>".$correo."</p>";
  $contenido .= "<p><b>Telefono: </b>".$telefono."</p>";
  $contenido .= "<p><b>Facebook: </b>".$facebook."</p>";
  $contenido .= "<p><b>Secundaria: </b>".$secundaria."</p>";
  $contenido .= "<h3>Nombre del tutor: ".$tutor."</h3>";
  $contenido .= "<p><b>Telefono del tutor: </b>".$telefonoTutor."</p>";
  $contenido .= "<p><b>Facebook del tutor: </b>".$facebookTutor."</p>";

  $cabeceras = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  mail($destino,$asunto,$contenido,$cabeceras);
  // redirecciona a una pagina
  header("Location:../enviado.html");
?>

<?php
//nombre del host, nombre de usuario,contraseña,nombre de la base de datos DB
$conection = mysqli_connect("localhost","id6029974_testadmin","Becker1430","id6029974_test");
 if (!$conection) {
  echo 'no existe coneccion';
  } else {
  echo 'coneccion exitosa';
    };
?>

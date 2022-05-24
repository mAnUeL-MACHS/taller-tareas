<?php
// Separamos en otro archivo la conexion con base de datos
$connection = mysqli_connect('localhost', 'root', '', 'test',3308);

if (!$connection) {
  die('conexion Fallida');
}
?>
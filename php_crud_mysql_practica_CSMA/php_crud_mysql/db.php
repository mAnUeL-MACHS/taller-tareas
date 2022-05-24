<?php

session_start();

$conn = mysqli_connect(
    'localhost:3308',
    'root',
    '',
    'php_mysql_crud'
);
// if (isset($conn)){
//    echo 'La Base de datos esta conectada';}
?>
<?php


$db = mysqli_connect('localhost', 'root', 'sasa', 'app_salon');

if(!$db){
    echo 'Error en la conexion';
    exit;
}
   

// echo'Conexion exitosa';

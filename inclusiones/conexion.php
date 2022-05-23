<?php

$servidor = 'localhost';
$nombre = 'root';
$contrasenya = '';
$bbdd = 'bdsterlasparadise';  // puede cambiar
        
$db = mysqli_connect($servidor, $nombre, $contrasenya, $bbdd);

mysqli_query($db, 'SET NAMES utf8');

// Comprobar que se ha realizado la conexión

if(mysqli_connect_errno()){
  echo "La conexión a la bbdd ha fallado, código de error: " . mysqli_connect_errno();  
} /*else{
    echo "Conexión realizada correctamente";
}

$zonas = mysqli_query($db, "SELECT * FROM zonas");

while($zona = mysqli_fetch_assoc($zonas)){
    var_dump($zona);
}
*/

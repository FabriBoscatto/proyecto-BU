<?php

$localhost = "localhost"; // Cambia esto al nombre de tu servidor de bases de datos si es diferente
$root = "root"; // Cambia esto a tu nombre de usuario de la base de datos
$contraseña = ""; // Cambia esto a tu contraseña de la base de datos
$bu_byt = "bu_byt"; // Cambia esto al nombre de tu base de datos

// Crea una conexión a la base de datos
 // Cambia esto al nombre de tu servidor de bases de datos si es diferente
$conex = mysqli_connect($localhost, $root, '', $bu_byt);

// Verifica la conexión
if (!$conex) {
    die("La conexión a la base de datos falló:" . mysqli_connect_error());
}

?>
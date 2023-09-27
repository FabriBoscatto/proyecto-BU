<?php
include('conexionDB.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombreyapellido"];
    $email = $_POST["email"];
    $numero = $_POST['numero'];
    $consulta = $_GET["consulta"];

    // Puedes hacer lo que desees con los datos, como almacenarlos en una base de datos o enviar un correo electrónico.
    // En este ejemplo, solo los mostraremos:
    echo "Nombre y apellido:" . $nombre;
    echo "Email: " . $email;
    echo "Numero de telefono:" . $numero;
    echo "Realiza tu consulta:" . $consulta;
}
?>
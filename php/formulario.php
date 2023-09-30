<?php
include ("php/conexionDB.php");

// Incluye la configuración de la conexión a la base de datos aquí

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $consulta = $_POST["consulta"];

    // Inserta los datos en la base de datos
    $sql = "INSERT INTO datos (nombre, email, numero, consulta) VALUES ('$nombre', '$email', '$numero', '$consulta')";

    if (mysqli_query($conex, $sql)) {
        echo "Los datos se han insertado correctamente en la base de datos.";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conn);
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conex);
}
?>
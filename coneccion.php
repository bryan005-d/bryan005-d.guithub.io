<?php
$servername = "localhost"; // Cambia si tu servidor es diferente
$username = "tu_usuario"; // Nombre de usuario de MySQL
$password = ""; // Contraseña de MySQL
$dbname = "freelance_portfolio"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

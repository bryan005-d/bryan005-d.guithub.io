<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_usuario = $_POST['nombre_usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Encriptar la contraseña
    $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

    // Insertar el usuario en la base de datos
    $sql = "INSERT INTO users (nombre_usuario, correo, contrasena) VALUES ('$nombre_usuario', '$correo', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
        header("Location: login.php"); // Redirigir al inicio de sesión
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

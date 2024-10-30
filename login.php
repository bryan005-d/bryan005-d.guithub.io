<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Buscar el usuario en la base de datos
    $sql = "SELECT * FROM users WHERE correo = '$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Verificar la contraseña
        if (password_verify($contrasena, $row['contrasena'])) {
            session_start();
            $_SESSION['usuario'] = $row['nombre_usuario'];
            echo "Inicio de sesión exitoso";
            header("Location: pagina_inicio.php"); // Redirigir a una página segura
            exit();
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
}

$conn->close();
?>

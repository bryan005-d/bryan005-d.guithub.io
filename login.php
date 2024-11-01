<?php
    include("conexion.php");
    session_start();
    $error='';
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    
      // username and password sent from form
    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT * FROM users WHERE email = '$myusername' and password_hash = '$mypassword'";

    $result = mysqli_query($db,$sql);
    $row = mysqli_num_rows($result);
    $count = mysqli_num_rows($result);

    if($count == 1) {
	
         // session_register("myusername");
        $_SESSION['login_user'] = $myusername;
        header("location: welcome.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISION CREATIVA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Barra superior -->
    <header class="top-bar">
        <div class="logo">VISION CREATIVA</div>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Portafolio</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Acerca de nosotros</a></li>
            </ul>
        </nav>
    </header>

    <!-- Contenido principal -->
    <main>
        <section class="welcome-section">
            <div class="welcome-text">
                <h1>¡BIENVENIDO A NUESTRO SITIO WEB!</h1>
                <p>Aquí encontrarás los mejores portafolios freelance en línea.</p>
                <div class="buttons">
                    <a href="freelance.html" class="explore">Explorar</a>
                    <a href="login.html" class="register">Registrarse</a>
                </div>
            </div>
            <div class="main-image">
                <!-- Imagen de espacio reservada para que puedas personalizarla -->
                <!-- Puedes colocar una imagen aquí si lo deseas -->
            </div>
        </section>
    </main>

    <!-- Barra inferior -->
    <footer class="bottom-bar">
        <p>&copy; VISIÓN CREATIVA - Todos los derechos reservados</p>
    </footer>
</body>
</html>
<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambia esto por tu nombre de usuario MySQL
$password = ""; // Deja vacío si no has establecido una contraseña
$dbname = "freelance_portafolio"; // Cambia esto por el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Procesar los datos del formulario
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptar la contraseña

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $email, $password);
$result = $stmt->execute();

if ($result) {
    echo "<script>alert('Registro exitoso!');</script>";
} else {
    echo "<script>alert('Error al registrar. Por favor, inténtelo nuevamente.');</script>";
}

$conn->close();
?>
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

<¿php

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
    
</head>
<body>
    <header>
        <h3 class="logo">VISION CREATIVA</h3>
        <nav class="navigation">
            <a href="#">explorar</a>
            <a href="#">servicios</a>
            <a href="#">contactanos</a>
            <button class="btninicio">
                <a href="index.html">inicio</a>
            </button>
            <button class="btnfolder">
                <a href="folder.html">portafolio</a>
            </button>
        </nav>
    </header>
    <div class="wraperlogin">
        <div class="form-box login">

            <form action = "" method = "post">

                <div class="input-box">
                    <span class="icono">
                        <ion-icon name="mail-open"></ion-icon>
                    </span>
                    <input type="email" name = "username" required>
                    <label>correo</label>
                </div>
                <div class="input-box">
                    <span class="icono">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password"name = "password" required>
                    <label>contraseña</label>
                </div>
                <div class="remember_forgot">
                    <label>recordar </label>
                        <a href="#">mi contraseña?</a>
                        <input type = "submit" value = " Submit "/>acceso <br />
                    <div class="login-register">
                        <p>no tengo cuenta
                            <a href="#"class="register-Link">register</a>
                        </p>
                    </div>
                </div>
            </form>
            <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

        </div>
    </div>
        <div class="form-box register">
            <h2>registrarse</h2>
                <form action="register.php" method="post">
                    <div class="input-box">
                        <span class="icono">
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <input type="text" name="username" required>
                        <label>nombre del usuario</label>
                    </div>
                    <div class="input-box">
                        <span class="icono">
                            <ion-icon name="mail-open"></ion-icon>
                        </span>
                        <input type="email" name="email" required>
                        <label>correo</label>
                    </div>
                    <div class="input-box">
                        <span class="icono">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input type="password" name="password" required>
                        <label>contraseña</label>
                    </div>
                    <div class="remember_forgot">
                        <label><input type="checkbox">acepto terminos y condiciones</label>
                        <button type="submit" class="btn">registrarse</button>
                    </div>
                </form>
        </div>
    </div>
    <script defer src="login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
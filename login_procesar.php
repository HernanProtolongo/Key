<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre_usuario = $_POST['nombre_usuario'];
$contraseña = $_POST['contraseña'];

// Consultar datos en la base de datos
$sql = "SELECT contraseña, es_admin FROM usuarios WHERE nombre_usuario='$nombre_usuario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($contraseña, $row['contraseña'])) {
        session_start();
        $_SESSION['nombre_usuario'] = $nombre_usuario;
        $_SESSION['es_admin'] = $row['es_admin'];
        if ($row['es_admin']) {
            header('Location: panel_control.php');
        } else {
            echo "Inicio de sesión exitoso. Usuario normal.";
        }
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Nombre de usuario no encontrado";
}

$conn->close();
?>
<a href="login.php" class="button"> Volver</a>

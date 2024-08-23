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
$contraseña = $_POST['contraseña']; // Almacena la contraseña en texto plano

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (nombre_usuario, contraseña, es_admin) VALUES ('$nombre_usuario', '$contraseña', 0)";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br>
<a href="login.php" class="button"> Volver</a>

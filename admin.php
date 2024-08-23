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

// Crear una cuenta de admin
$nombre_usuario = 'admin';
$contraseña = password_hash('admin_password', PASSWORD_DEFAULT);

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (nombre_usuario, contraseña, es_admin) VALUES ('$nombre_usuario', '$contraseña', 1)";

if ($conn->query($sql) === TRUE) {
    echo "Cuenta de admin creada con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

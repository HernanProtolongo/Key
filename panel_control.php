<?php
session_start();

if (!isset($_SESSION['nombre_usuario']) || !$_SESSION['es_admin']) {
    header('Location: login.php');
    exit();
}

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

$sql = "SELECT nombre_usuario, contraseña FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Control</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Panel de Control</h1>
        <a href="logout.php" class="button">Cerrar sesión</a>
        <h2>Usuarios Registrados</h2>
        <table border="1">
            <tr>
                <th>Nombre de Usuario</th>
                <th>Contraseña</th>
            </tr>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['nombre_usuario']}</td><td>{$row['contraseña']}</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>

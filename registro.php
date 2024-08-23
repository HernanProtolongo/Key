<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Registro de Usuario</h1>
        <form action="registro_procesar.php" method="post">
            <label for="nombre_usuario">Nombre de Usuario:</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" required>
            <br>
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>
            <br>
            <input type="submit" value="Registrar">
        </form>
        <a href="login.php" class="button">Ir al Login</a>
    </div>
</body>
</html>

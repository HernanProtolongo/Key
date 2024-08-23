<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Inicio de Sesión</h1>
        <form action="login_procesar.php" method="post">
            <label for="nombre_usuario">Nombre de Usuario:</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" required>
            <br>
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>
            <br>
            <input type="submit" value="Iniciar Sesión">
        </form>
        <a href="registro.php" class="button">Volver al Registro</a>
    </div>
</body>
</html>

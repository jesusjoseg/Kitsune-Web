<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="icon" type="image/x-icon" href="Src/gemini-svg.ico">
</head>
</head>
<body>
    <?php include 'Php/header.php'; ?>
    <h1>Iniciar Sesión</h1>
    <form action="Php/ProcessLogin.php" method="post">
        <label for="Correo">Correo</label>
        <input type="email" id="Correo" name="Correo" required>
        <label for="Contraseña">Contraseña</label>
        <input type="password" id="Contraseña" name="Contraseña" required>
        <p>¿Olvidates tu contraseña? <a href="Php/ResetPassword.php">Restablecer</a></p>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
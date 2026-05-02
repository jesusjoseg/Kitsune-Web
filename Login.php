<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión -- Kitsune POS</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="icon" type="image/x-icon" href="Src/Image/gemini-svg.ico">
</head>
</head>
<body>
    <?php include 'Php/header.php'; ?>
    <main class="login-container">
        <div class="login-card">
            <h1>Iniciar Sesión</h1>
            <form action="Php/ProcessLogin.php" method="post">
                <div class="input-group">
                    <label for="Correo">Correo</label>
                    <input type="email" id="Correo" name="Correo" required>
                </div>
                <div class="input-group">
                    <label for="Contraseña">Contraseña</label>
                    <input type="password" id="Contraseña" name="Contraseña" required>
                </div>
                
                <p>¿Olvidates tu contraseña? <a href="Php/ResetPassword.php">Restablecer</a></p>
                <input type="submit" value="Iniciar Sesión">
            </form>
            <div>
                <a href="Registro.php" class="Regristo">¿No tienes cuenta? Regístrate aquí</a>
            </div>
        </div>
    </main>
    <?php include 'Php/Footer.php' ?>
</body>
</html>
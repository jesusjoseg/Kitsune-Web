<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro -- Kitsune POS</title>
    <link rel="icon" type="image/x-icon" href="Src/Image/gemini-svg.ico">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include 'Php/header.php'; ?>
    <main class="regristo-main">
        <div class="container registro-container">
            <div class="registro-info">
                <h2>¡Esta a un paso de la <span class="orange">V0.8</span>!</h2>
                <ul class="beneficios-list">
                    <h3>Plan basico</h3>
                    <li><i class="fas fa-check orange"></i></li>
                    <li><i class="fas fa-check orange"></i></li>
                    <li><i class="fas fa-check orange"></i></li>
                    <li><i class="fas fa-check orange"></i></li>
                </ul>
                <ul class="beneficios-list">
                    <h3>Plan PRO</h3>
                    <li><i class="fas fa-check orange"></i> Los mismo de plan basico</li>
                    <li><i class="fas fa-check orange"></i></li>
                    <li><i class="fas fa-check orange"></i></li>
                    <li><i class="fas fa-check orange"></i></li>
                </ul>
                <div class="precio-badge">
                    <span>Precios de plan basico</span>
                    <h3 class="orange">$800.00 MXN</h3>
                </div>
                <div class="precio-badge"></div>
                <span>Precios de plan Pro</span>
                <h3 class="orange">$1200.00 MXN</h3>
            </div>
        </div>
        <div class="registro-card">
            <h3>Crea tu Cuenta</h3>
            <p></p>
            <form action="">
                <label for="Nombre">Nombre:</label>
                <input type="text" name="" id="">
                <input type="submit" value="Regtista">
            </form>
        </div>
    </main>
    <?php include 'Php/Footer.php'; ?>
</body>
</html>
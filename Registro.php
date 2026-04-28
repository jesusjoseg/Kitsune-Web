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
                    <h3>Plan Básico</h3>
                    <li><i class="fas fa-check orange"></i> Punto de Venta y Control de Inventarios</li>
                    <li><i class="fas fa-check orange"></i> Configuración de Ticket Personalizado</li>
                    <li><i class="fas fa-check orange"></i> Licencia Vitalicia Kitsune POS</li>
                    <li><i class="fas fa-check orange"></i> Soporte para 1 Sucursal Física</li>
                </ul>
                <ul class="beneficios-list">
                    <h3>Plan PRO</h3>
                    <li><i class="fas fa-check orange"></i> Los mismo de plan Básico</li>
                    <li><i class="fas fa-check orange"></i> Creacion de reporte Diario</li>
                    <li><i class="fas fa-check orange"></i> Gestion de Administración de crédito</li>
                    <li><i class="fas fa-check orange"></i> Registro de Clientes y Saldos Pendientes</li>
                </ul>
                <div class="precio-badge">
                    <span>Precios de plan Básico</span>
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
            <form action="Php/ProcessRegistro.php" method="POST" class="form-registro">
                <div class="input-group">
                    <label for="Nombre">Nombre:</label>
                    <input type="text" name="Nombre" id="Nombre" required>
                </div>
                <div class="input-group">
                    <label for="Apellido">Apellido:</label>
                    <input type="text" name="Apellido" id="Apellido" required>
                </div>
                <div class="input-group">
                    <label for="Correo">Correo:</label>
                    <input type="email" name="Correo" id="Correo" placeholder="tunombre@ejemplo.com"required>
                </div>
                <div class="input-group">
                    <label for="Password">Contraseña:</label>
                    <input type="password" name="Contrasena1" id="Contrasena1" placeholder="Contraseña" required>
                </div>
                <div class="input-group">
                    <label for="Password">Reperti Contraseña:</label>
                    <input type="password" name="ConfirmarContrasena" id="ConfirmarContrasena" placeholder="Contraseña" required>
                </div>
                <div class="input-group">
                    <label for="Telefono">Telefono:</label>
                    <input type="tel" id="Telefono" name="Telefono" placeholder="123-456-7890">
                </div>

                <input type="submit" value="Registrar">
            </form>
        </div>
    </main>
    <?php include 'Php/Footer.php'; ?>
</body>
</html>
<?php
require_once 'Php/Conexion.php'; // Accede a la carpeta Php para la conexión[cite: 2, 3]

$Plan = $_GET['Plan'] ?? 'Basico';
$nombre_plan = ($Plan === 'Pro') ? 'Licencia Kitsune PRO' : 'Licencia Kitsune Básica';
$precio = [
    'Basico' => '800.00',
    'Pro' => '1200.00',
    'upgrade' => '400.00'
];
$monto = $precio[$Plan] ?? '800.00'; // Punto y coma agregado
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Kitsune POS</title>
    <!-- Corregido: Sin ../ porque ya estás en la raíz[cite: 2] -->
    <link rel="stylesheet" href="Style.css"> 
    <link rel="icon" type="image/x-icon" href="Src/Image/gemini-svg.ico">
    <!-- El Client ID se extrae del .env cargado en Conexion.php[cite: 2, 3] -->
    <script src="https://www.paypal.com/sdk/js?client-id=<?php echo $Env['Paypal_client_ID'];?>&currency=MXN"></script>
</head>
<body>
    <?php include 'Php/header.php'; ?>
    <main>
        <div class="container" style="padding: 100px 20px; text-align: center;">
            <h2 style="color: white;">Plan seleccionado: <?php echo ucfirst($Plan); ?></h2>
            <p style="color: white;">Total a pagar <strong>$<?php echo $monto; ?> MXN</strong></p>
            
            <input type="hidden" id="p-price" value="<?php echo $monto; ?>">
            <input type="hidden" id="p-id" value="<?php echo $Plan; ?>">
            
            
            <!-- Contenedor para los botones de PayPal -->
            <div id="paypal-button-container" style="max-width: 400px; margin: 20px auto;"></div>
        </div>
    </main>
    <script src="Script.js"></script>
    <?php include 'Php/Footer.php'; ?>
</body>
</html>
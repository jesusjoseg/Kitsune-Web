<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="author" content="Jesus Jose Gardea">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kitsune -- Sistema de Ventas</title>
        <link rel="stylesheet" href="Style.css">
        <link rel="icon" type="image/x-icon" href="Src/Image/gemini-svg.ico">
</head>
<body>
    <?php include 'Php/header.php'; ?>
    <main class="container">
        <h1>Precio y Lincencias</h1>
        <div class="price-grid">
            <div class="price-card">
                <h2>Lincecia Basico</h2>
                <p class="price">$800.00<span class="orange">MXN</span></p>
                <ul>
                    <li>Registro de Ventas y Compras</li>
                    <li>Soporte para Códigos de Barras</li>
                    <li>Inventario básicos</li>
                    <li>Generación de Tickets de Venta</li>
                </ul>
                <a href="Php/Compra.php?Plan=Basico" class="btn-buy">Compra Plan Basico</a>
            </div>
            <div class="price-card">
                <h2>Lincecia PRO</h2>
                <p class="price">$1200.00 <span class="orange">MXN</span></p>
                <ul>
                    <li>Todo lo de la Licencia Básica</li>
                    <li>Creacion de cuentas de clientes (Cuentas por Cobrar)</li>
                    <li>Gestión de Créditos (Cuentas por Cobrar)</li>
                    <li>Reportes Retroactivos en PDF</li>
                </ul>
                <a href="Php/Compra.php?Plan=Pro" class="btn-buy">Compra plan Pro</a>
            </div>
            <div class="price-card">
                <h2>Pruebla Gratuita</h2>
                <p class="price" >$0.00 <span class="orange">MXN</span></p>
                <ul>
                    <li>Prueba gratuita de 30 dias</li>
                    <li>Ideal para conocer el sistema</li>
                    <li></li>
                    <li>Sin compromiso de permanencia</li>
                    <li></li>
                    <a href="Descarga.php" class="btn-free">Probar gratis</a>
                </ul>
            </div>
            
        </div>
    </main>
    <?php include 'Php/Footer.php'; ?>
</body>
</html>
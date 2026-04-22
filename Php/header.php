<?php session_start(); ?>
<header>
    <nav class="navbar">
        <div class="Logo">
            <img src="Src/Image/gemini-svg.png" alt="Logo de Kitsune" class="logo-image" width="40px">
            <span class="brand">Kitsune <span class="oragen">POS</span></span>
        </div>
        <ul class="nav-link">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="Acerca.php">Características</a></li>
            <li><a href="Precio.php">Precios</a></li>
            <li><a href="Descarga.php">Descarga</a></li>
            <li><a href="Contacto.php">Contacto</a></li>
            <?php if(isset($_SESSION['user_id'])): ?>
                <li><a href="Php/logout.php">Salir</a></li>
            <?php else: ?>
                <li><a href="Login.php">Iniciar Sesión</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
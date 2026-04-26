<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Jesus Jose Gardea">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kitsune -- Sistema de Ventas</title>
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="icon" type="image/x-icon" href="Src/Image/gemini-svg.ico">
    </head>
    <body>
        <?php include 'Php/header.php'; ?>
        <main class="hero-section">
            <div class="hero-content">
            <h1>Controla tu negrocios con <span class="orange">Kitsune POS</span></h1>
            <p>La herramienta perfecta de venta mas rapida, intuitiva y poderosa para los negocios.</p>
            </div>
            <section class="features">
                <div class="feature-card">
                    <i class="fas fa-bolt orange"></i>
                    <h3>Velocidad Real</h3>
                    <p>Ventas procesadas en milisegundos para que no hagas esperar a tu clientes</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-shield-alt orange"></i>
                    <h3>Seguridad Total</h3>
                    <p>tus dato y los cliente protegidos con ecritacion de grado comercial</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-chart-pie orange"></i>
                    <h3>Invetario Vivo</h3>
                    <p>Controla tu inventario de manera automatica con cada venta realizada</p>
                </div>
            </section>
            <section class="cta-section">
                <h2>¿Listo para empreza?</h2>
                <p>Únete a los negocios que ya Confian en la Velocidad de Kitsune POS</p>
                <a href="Registro.php" class="btn-login">Comenza ahoras mismo</a>
            </section> 
            <section class="stats-grid">
                <div class="stats-item">
                </div>
                <div class="stats-item">
                </div>
                <div class="stats-item">
                    <span class="orange">Codigo</span>
                    <p>100% hecho a mano</p>
                    <small>Sin plantillas  pesadas ni basura</small>
                </div>
            </section>
            <section class="app-showcase">
                <div class="container">
                    <h2>Echa un vistazo  a la <span class="orange">Interfaz</span></h2>
                    <p>Diseño limpio y mordeno, optimizado  para jornada de trabajo intensas.</p>
                    <div class="screenshots-grind">
                        <div class="screensjots-item">
                            <img src="Src/Image/Captura_Venta.png" alt="Pantalla de venta de kitsune">
                            <h4>ventana de ventas</h4>
                        </div>
                        <div class="screensjots-item">
                            <img src="Src/Image/Captura_Invertario.png" alt="Pantalla de Invertario de kitsune">
                            <h4>ventana de invertario</h4>
                        <div class="screensjots-item">
                            <img src="Src/Image/Captura_Compra.png" alt="Pantalla de compra de kitsune">
                            <h4>ventana de compras</h4>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="project-roadmap">
                <div class="container">
                    <h2>Lo que estamos construyendo</h2>
                </div>
            </section>
            <section class="version-status">
                <div class="container">
                    <h2>Estado de la version <span class="orange">Version 0.8</span></h2>
                    <p>Actualmente Kitsune POS  esta optimizado  para los siguiente Sectores:</p>
                    <div class="active-sectors">
                        <div class="sector-bacger active">
                            <i class="fas fa-gamepad"></i>
                            <span>Videojuegos</span>
                        </div>
                        <div class="sector-bacger active">
                            <i class="fas fa-laptop"></i>
                            <span>Compucto y Hardware</span>
                        </div>
                        <div class="sector-bacger active">
                            <i class="fas fa-shopping-bag"></i>
                            <span>Bolsa y accesorios</span>
                        </div>
                        <div class="sector-bacger active">
                            <i class="fas fa-tshirt"></i>
                            <span>Boutique y Ropa</span>
                        </div>
                    </div>
                    <div class="upcoming-update">
                        <h3><i class="fas fa-clock orange" > </i>Proximante en la Version 1.0</h3>
                        <p>Estamo trabajando en para intregra  los siguinte:</p>
                        <div class="locked-sectors">
                            <span><i class="fas fa-utensils"></i>Abarrotes</span>
                            <span><i class="fas fa-pills"></i>Farmacia</span>
                            <span><i class="fas fa-tools"></i>Ferreteria</span>
                            <span><i class="fas fa-print"></i>Papeleria</span>
                            <span><i class=""></i></span>
                            <span><i class=""></i></span>
                        </div>
                        <p>Y ademas de la siguetes mejoras:</p>
                        <div class="locked-sectors">

                        </div>
                    </div>
                </div>
            </section>
            <section class="version-history">
                <div class="container">
                    <h2><i class="fas fa-history orange"></i> Historia de Version</h2>
                    <div class="version-item">
                        <div class="version-header">
                            <span class="version-number">V0.8 (Actual)</span>
                            <span class="version-date">Abril 2026</span>
                        </div>
                        <ul class="version-deatails">
                            <li><span class="tag-new">Nuevo: </span>se le agrego un barra de menu</li>
                            <li><span class="tag-new">Nuevo: </span>se le agregor una ventana donde usuario puede agregar dato para recibo</li>
                            <li><span class="tag-update">Mejora: </span>Cambio de Diseño de la intrefaz</li>
                            <li><span class="tag-update">Mejora: </span>la tabla de invertario ahora muestra cuando el producto se acaba</li>
                            <li><span class="tag-Fix">FIX:</span>producto sin imagen cerraba la app en venta, Ahora a crea una compra se le agregar una imagen por deafult</li>
                        </ul>
                    </div>
                    <div class="version-item old-version">
                        <div class="version-header">
                            <span class="version-number">V0.5</span>
                            <span class="version-date">Noviembre 2025</span>
                        </div>
                        <ul class="version-deatails">
                            <li><span class="tag-new">NUEVO: </span>Lazamiento de la base de dato en python</li>
                            <li><span class="tag-new">NUEVO: </span>Interfaz básica para boutique y ropa</li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
        <?php include 'Php/Footer.php'; ?>
    </body>
</html>
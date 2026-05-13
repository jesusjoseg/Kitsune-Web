<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}

require_once 'Php/Conexion.php';
if(!isset($_SESSION['user_id'])){
    header("Location: Login.php");
    exit();
}
$mensaje_clase="";
$aleta ="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id_User =$_SESSION['user_id'];
    $Asunto =$_POST['Asunto'];
    $Tipo =$_POST['Tipo'];
    $Texto= $_POST['Mensaje'];
    $stmt =$Conexion->prepare("INSERT INTO Reporte(Usuario_id,Asunto,Tipo,Mensaje) VALUES(?,?,?,?)");
    $stmt ->bind_param("isss",$id_User,$Asunto,$Tipo,$Texto);
    if($stmt->execute()){
        $aleta="¡Reporte enviado con éxito! Nuestro equipo lo revisara.";
        $mensaje_clase ="alert-success";
    }
    else{
        $aleta="Error al enviar el reporte. Intretalo más tarde.";
        $mensaje_clase="alert-danger";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Src/Image/gemini-svg.ico">
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <?php include 'Php/header.php'; ?>
    <h1>Contacto</h1>
    <p>Bienvenido a la página de contacto.</p>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-headder bg-dark text-white p-3">
                        <h5 class="mb-0">Enviar un Reporte /Contacto</h5>
                    </div>
                    <div class="card-body p-4">
                        <?php if($aleta): ?>
                            <div class="alert <?php echo $mensaje_clase; ?>"><?php echo $aleta; ?></div>
                        <?php endif; ?>
                        <form action="Contacto.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Tipo de Reporte</label>
                                <select name="Tipo" id="Tipo" class="form-select" required>
                                    <option value="Soporte">Soporte Tecnico</option>
                                    <option value="Pagos">Dudas con mi pago / Licencia</option>
                                    <option value="Bug">Reporta un Error</option>
                                    <option value="Surgerencia">Sugerncia</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Asunto Corto</label>
                                <input type="text" name="Asunto" id="Asunto" class="form-control" placeholder="" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mensaje Detallado</label>
                                <textarea  name="Mensaje" id="Mensaje" class="form-control" row="5" placeholder="Ecribir tu mensaje" required></textarea>
                            </div>
                            <div class="d-grid gap-2 login-card">
                                <button type="submit" class="btn-buy">Enviar Reeporte</button>
                                <a href="dashboard_usuario.php" class="btn btn-link">Volve a panel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div >
    <?php include 'Php/Footer.php' ?>
</body>
</html>
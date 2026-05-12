<?php
session_start();
require_once 'Php/Conexion.php';
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
$user_id = $_SESSION['user_id'];
$mesanje = '';
$stmt = $Conexion->prepare("SELECT Nombre,Apellido,Usuario,Correo,Licencia,Nivel,Vincule,NombrePc,Fecha,verificado FROM Usuario WHERE id = ?");
$stmt->bind_param("i",$user_id);
$stmt->execute();
$resultado =$stmt->get_result();
$user = $resultado->fetch_assoc();
$fecha_regristo = new DateTime($user['Fecha']);
$hoy= new DateTime();
$Diferencia= $hoy->diff($fecha_regristo);
$DiaRestante= 30-$Diferencia->days;
if($DiaRestante<0) $DiaRestante=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Usuario | Kitsune POS</title>
    <link rel="stylesheet" href="Style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="Src/Image/gemini-svg.ico" type="image/x-icon">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow-sm">
        <div>
            <a href=""></a>
            <div class="d-flex text-white">
                <span>¡Bienvenido, <strong><?php echo$user['Usuario']; ?></strong>! </span>
                <a href="Php/logout.php" class="btn btn-sm btn-outline-light ms-3">Cerra sesión</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card card-perfil shadow-sm p-4 text-center">
                    <div class="mb-3">
                        <img src="" alt="Avatar">
                    </div>
                    <h4><?php echo $user['Nombre']." ".$user['Apellido']; ?></h4>
                    <p class="text-muted"><?php echo $user['Correo'] ?></p>
                    <hr>
                    <div class="mb-2">
                        <span class="text-muted d-block">Nivel de Cuenta:</span>
                        <?php
                        $clase_badge="badge-demo";
                        if($user['Nivel']=='PRO') $clase_badge="badge-pro" ;
                        if($user['Nivel']=='BASICO') $clase_badge="badge-basico" ;
                         ?>
                         <span class="badge <?php echo $clase_badge;?> p-2 fs-6"><?php echo$user['Nivel']; ?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <?php
                if($user['verificado']==0):?>
                    <div class="alert alert-danger shadow-sm">
                        <p><strong>¡Antecion!</strong> Tu correo no ha sido verificado</p>
                    </div>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
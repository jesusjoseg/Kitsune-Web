<?php
session_start();
require_once 'Php/Conexion.php';
if(!isset($_SESSION['user_id']) && isset($_GET['access_token'])){
    $token_recibido =$_GET['access_token'];
    $stmt_tk=$Conexion->prepare("SELECT id,Correo,Nivel FROM Usuario WHERE Token =? and verificado=1");
    $stmt_tk->bind_param("s",$token_recibido);
    $stmt_tk->execute();
    $res_tk =$stmt_tk->get_result();
    if($user_found =$res_tk-> fetch_assoc()){
        $_SESSION['user_id']=$user_found['id'];
        $_SESSION['email']=$user_found['Correo'];
        header("Location: dashboard_usuario.php");
        exit();
    }
    else{
        header("Location:Login.php?error=token_invalido");
        exit();
    }
}
if(!isset($_SESSION['user_id'])){
    header("Location:Login.php");
    exit();
}
$user_id=$_SESSION['user_id'];

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
                <div class="card card-cutom shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h5 class="card-title">Detalles de Licencia</h5>
                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <p class="mb-0 text-muted">Codigo de Activacion</p>
                                <p class="fw-bold fs-5 text-primary"><?php echo $user['Licencia']?:'NO ASIGNADA'; ?></p>
                            </div>
                            <div class="col-sm-6 text-sm-end">
                                <?php if($user['Nivel']=='DEMO'): ?>
                                    <p class="mb-0 text-muted"> Días de Prueba:</p>
                                    <p class="fw-bold fs-5 text-danger"><?php $DiaRestante ?>Dias Restante</p>
                                <?php else: ?>
                                    <p class="mb-0 text-muted">Estado:</p>
                                    <p class="fw-bold fs-5 text-success">Activa</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if($user['Nivel']=='BASICO'|| $user['Nivel']=='DEMO'):?>
                            <div class="upgrade-section mt-3 p-3 border-start border-warning border-4">
                                <h6>Mejora de Version</h6>
                                <p class="small text-muted">Obten todas la funciones avazandas.</p>
                                <a href="" class="btn btn-warning btn-sm">Actualizar Ahora</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card card-custom shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3">Equipo Vinculado</h5>
                        <?php if(!empty($user['Vincule'])): ?>
                            <div class="pc-info-box d-flex justify-content-between align-items-center p-3 border rounded">
                                <div>
                                    <h6 class="mb-1"><?php echo $user['NombrePc']?: 'PC Principal'; ?></h6>
                                    <code class="small text-break"><?php echo $user['Vincule']; ?></code>
                                </div>
                                <button onclick="ConfimarBorrarPC" class="btn btn-outline-danger btn-sm">Desvincula</button>
                            </div>
                            <?php else: ?>
                                <div class="alert alert-info">Abre la App en tu PC Vincularla</div>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        
    </script>
    <script src="https://cdn.npmmirror.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
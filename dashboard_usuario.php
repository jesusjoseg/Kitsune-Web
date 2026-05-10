<?php
session_start();
require_once 'Php/Conexion.php';
if(!isset($_SESSION['usuario_id'])){
    header("Location: login.php");
    exit();
}
$user_id = $_SESSION['usuario_id'];
$mesanje = '';
$stmt = $conn->prepare("SELECT Nombre,Apellido,Usuario,Correo,Licencia,Nivel,Vincule,NombrePc,Fecha,verificado FROM Usuario WHERE = ?");
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
    <link rel="shortcut icon" href="Src/Image/gemini-svg.ico" type="image/x-icon">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow-sm">
        <div>
            <a href=""></a>
            <div class="d-flex text-white">
                <span></span>
                <a href="">Cerra sesión</a>
            </div>
        </div>
    </nav>
    <div class="">
        <div>
            <div>
                <div>
                    <div>
                        <img src="" alt="Avatar">
                    </div>
                    <h4></h4>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
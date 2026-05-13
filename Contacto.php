<?php
session_start();
require_once 'Php/Conexion.php';
if(!isset($_SESSION['user_id'])){
    header("Location: Login.php");
    exit();
}
$mensaje_clase="";
$aleta ="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id_User =$_SESSION['user_id'];
    $Asunto =$_POST['asunto'];
    $Tipo =$_POST['Tipo'];
    $Texto= $_POST['Mensaje'];
    $stmt =$Conexion->prepare("INSERT INTRO Reporte(Usuario_id,Asunto,Tipo,Mensaje) VALUES(?,?,?,?)");
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

                </div>
            </div>
        </div>
    </div >
    <?php include 'Php/Footer.php' ?>
</body>
</html>
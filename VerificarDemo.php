<?php
session_start();
require_once 'Php/Conexion.php';
header('Content-Type: application/json');
$Correo =$_POST['']??'';
$hwid_python =$_POST['hwid']??'';
$nombre_pc_python =$_POST['NombrePc']??'';

if(empty($Correo)|| empty($hwid_python)){
    echo json_encode(["status"=>"error","Mesanje"=>"Dato incompleto"]);
    exit();
}

$sql="UPDATE Usuario SET Vincule = ?, NombrePc =? ,verificado = 1 WHERE Correo=?  ";
$stmt =$Conexion->prepare($sql);
$stmt->bind_param("ssi",$hwid_python,$nombre_pc_python,$Correo);
$stmt->execute();
if()
    
?>
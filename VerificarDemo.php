<?php
require_once 'Php/Conexion.php';
header('Content-Type: application/json');
$Correo =$_POST['correo']??'';
$hwid_python =$_POST['hwid']??'';
$nombre_pc_python =$_POST['NombrePc']??'';

if(empty($Correo)|| empty($hwid_python)){
    echo json_encode(["status"=>"error","Mesanje"=>"Dato incompleto"]);
    exit();
}

$sql="UPDATE Usuario SET Vincule = ?, NombrePc =? ,verificado = 1 WHERE Correo=?  ";
$stmt =$Conexion->prepare($sql);
$stmt->bind_param("sss",$hwid_python,$nombre_pc_python,$Correo);
$stmt->execute();
if ($stmt->affected_rows > 0) {
    $res = $Conexion->query("SELECT Token FROM Usuario WHERE Correo = '$Correo'");
    $user = $res->fetch_assoc();

    echo json_encode([
        "status" => "success",
        "verificado" => 1,
        "token" => $user['Token'],
        "mensaje" => "PC Vinculada con éxito"
    ]);
}
else{
json_encode(["status"=>"error","Mensaje"=>"Correo no encontrado o ya Viculando gato"]);
}
$Conexion->close();
?>
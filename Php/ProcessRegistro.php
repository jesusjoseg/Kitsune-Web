<?php
require_once 'Conexion.php';

if($_SERVER["REQUEST_METHOD"]=='POST'){
    $nombre=$_POST['Nombre'];
    $apellido=$_POST['Apellido'];
    $Usuario=$_POST['Usuario'];
    $correo=$_POST['Correo'];
    $contrasena=$_POST['Contrasena1'];
    $contrasenac=$_POST['ConfirmarContrasena'];
    $telefono=$_POST['Telefono'];
    if($contrasena!==$contrasenac){
        die("Erro: Las contraseña no coinciden");
    }
    $token=bin2hex(random_bytes(50));
    $password_hash = password_hash($contrasena,PASSWORD_BCRYPT);
    $sql="INSERT INTO Usuario (Nombre,Apellido,Usuario,Correo,Password,Telefono,Token) VALUES(?,?,?,?,?,?,?)";
    $stmt = $Conexion->prepare($sql);
    $stmt -> bind_param("sssssss",$nombre,$apellido,$Usuario,$correo,$password_hash,$telefono,$token);
    if($stmt->execute()){
        echo "¡Regristo exitoso! Ahora puede probar el flujo de pago.";
    }
    else{
        echo "Error al siguente:".$stmt->error;
    }
    $stmt->close();
    }
?>
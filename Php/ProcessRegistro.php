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
    $password_hash = password_hash($contrasena,PASSWORD_BCRYPT);
    $sql="INSERT INTO Usuario (Nombre,Apellido,Usuario,Correo,Password,Telefono) VALUES(?,?,?,?,?,?)";
    $stmt = $Conexion->prepare($sql);
    $stmt -> bind_param("ssssss",$nombre,$apellido,$Usuario,$correo,$password_hash,$telefono);
    if($stmt->execute()){
        echo "¡Regristo exitoso! Ahora puede probar el flujo de pago.";
    }
    else{
        echo "Error al siguente:".$stmt->error;
    }
    $stmt->close();
    $Conexion-> close();
    }
?>
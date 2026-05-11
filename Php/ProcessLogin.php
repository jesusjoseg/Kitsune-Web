<?php
session_start();
include_once 'Conexion.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Correo = $_POST['Correo'];
    $Contrasena = $_POST['Contraseña'];
    $sql ="SELECT id,Nombre,Password FROM Usuario WHERE Correo =?";
    $stmt = $Conexion->prepare($sql);
    $stmt->bind_param("s",$Correo);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($user= $resultado->fetch_assoc()){
        if (password_verify($Contrasena,$user['Password'])){
            $_SESSION['user_id']=$user['id'];
            $_SESSION['user_name']=$user['Nombre'];
            echo "Bienvenido, ". $user['Nombre'].". redrigiendo...";
            header('Refresh: 5 ; url=../index.php',);
        }
        else{
            echo "Contraseña Incorreta.";
        }
    }
    else{
        echo "el Correo no exite";
    }
    $stmt ->close();
    $Conexion->close();
}
?>
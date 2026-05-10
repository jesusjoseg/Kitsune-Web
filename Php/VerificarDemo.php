<?php
require_once 'Conexion.php';
header('Contennt-Type: application/json');
$usuario =$_POST['usuario']??'';
$hwid = $_POST['hwid']??'';

?>
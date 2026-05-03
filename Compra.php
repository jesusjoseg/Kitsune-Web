<?php
require_once 'Php/Conexion.php';
$Plan =$_GET['Plan']?? 'Basico';
$nombre_plan=($Plan==='Pro')?'Licencia Kitsune PRO':'Licencia Kitsune Básica';
$precio=[
    'Basico'=> '800.00',
    'Pro'=>'1200.00',
    'upgrade'=>'400.00'
];
$monto =$precio[$Plan]??'800.00'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Kitsune POS</title>
    <link rel="stylesheet" href="../Style.css">
    <link rel="icon" type="image/x-icon" href="Src/Image/gemini-svg.ico">
</head>
<body>
    <?php  include 'Php/header.php'?>
    <?php  include 'Php/Footer.php' ?>
</body>
</html>
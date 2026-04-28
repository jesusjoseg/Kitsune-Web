<?php
function loadenv($path){
    if(!file_exists($path)) return[];
    $lines =file($path,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
    $Env=[];
    foreach ($lines as $line){
        if (strpos(trim($line),'#')===0)continue;
        list($key, $value)=explode('=',$line,2);
        $Env[trim($key)]=trim($value);
    }
    return $Env;
}
$Env =loadenv(__DIR__.'/.env');
$host =$Env['DB_HOST']??'';
$user= $Env['DB_USER']??'';
$password =$Env['DB_PASSWORD']??'';
$datebase= $Env['DB_NAME']??'';
$Conexion = mysqli_connect($host,$user,$password,$datebase);
if ($Conexion->connect_error){
    die("Erro de conexion:".$Conexion->connect_error);
}
$Conexion->set_charset("utf8")
?>
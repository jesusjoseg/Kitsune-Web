<?php
function loadenv($path) {
    if (!file_exists($path)) return;
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $Env = [];
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue; // Ignorar comentarios
        list($key, $value) = explode('=', $line, 2);
        $Env[trim($key)] = trim($value);
        }
        return $Env;
    }   
loadenv(__DIR__.'/.env');
    $host=$Env['DB_HOST'];
    $user=$Env['DB_USER'];
    $password=$Env['DB_PASSWORD'];
    $database=$Env['DB_NAME'];
    $Conexion = new mysqli($host, $user, $password, $database);
    if ($Conexion->connect_error) {
        die("Error de conexión: " . $Conexion->connect_error);
   }
   $Conexion->set_charset("utf8");



?>
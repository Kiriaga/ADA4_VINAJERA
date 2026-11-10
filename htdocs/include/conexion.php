<?php
$host = 'sql200.infinityfree.com';
$dbname = 'if0_43306767_comunidad_db'; 
$username = 'if0_43306767';        
$password = 'Rtx2060tI';            

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si falla la conexión globalmente
    die("Error crítico de conexión a la base de datos.");
}
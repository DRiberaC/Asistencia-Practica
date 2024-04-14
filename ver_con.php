<?php
// Conexión a la base de datos (cambia estos valores según tu configuración)
$servername = "192.168.10.10";
$username = "root";
$password = "root";
$database = "asistencia";

try {
    // Crear una nueva conexión PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // Establecer el modo de error PDO a excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa";
} catch (PDOException $e) {
    // Si ocurre un error, mostrar el mensaje de error
    http_response_code(500);
    exit("Error de conexión a la base de datos: " . $e->getMessage());
}

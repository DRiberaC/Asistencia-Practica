<?php
// Conexión a la base de datos (cambia estos valores según tu configuración)
$servername = "192.168.10.10";
$username = "root";
$password = "root";
$database = "asistencia";

$pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

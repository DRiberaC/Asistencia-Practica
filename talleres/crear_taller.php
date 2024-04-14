<?php
include('../cnx.php');

$nombre = $_GET['nombre'];
$fecha = $_GET['fecha'];

echo "el nombre es $nombre y la fecha es $fecha";

// Preparar la consulta de inserción
$stmt = $pdo->prepare("INSERT INTO taller (nombre, fecha) VALUES (:nombre, :fecha)");

// Bind parameters
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':fecha', $fecha);

// Ejecutar la consulta
$stmt->execute();

echo "Inserción exitosa";

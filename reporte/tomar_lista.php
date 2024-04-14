<?php
include('../cnx.php');

$asistente_id = $_GET['asistente_id'];
$taller_id = $_GET['taller_id'];
$asistio = $_GET['asistio'];

echo "el asistente asistio? :  $asistio. <br>";

// Preparar la consulta de inserción
$stmt = $pdo->prepare("INSERT INTO asistencia (asistente_id, taller_id, asistio) VALUES (:asistente_id, :taller_id, :asistio)");

// Bind parameters
$stmt->bindParam(':asistente_id', $asistente_id);
$stmt->bindParam(':taller_id', $taller_id);
$stmt->bindParam(':asistio', $asistio);

// Ejecutar la consulta
$stmt->execute();
echo "Inserción exitosa";

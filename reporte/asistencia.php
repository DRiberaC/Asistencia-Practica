<?php
include('../cnx.php');

$taller_id = $_GET['taller_id'];

// Preparar la consulta de inserción
$stmt = $pdo->prepare("SELECT * FROM asistencia WHERE taller_id = :taller_id");

// Bind parameters
$stmt->bindParam(':taller_id', $taller_id);

// Ejecutar la consulta
$stmt->execute();

// Obtener los resultados
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Imprimir los resultados
foreach ($results as $row) {
    echo "taller_id: " . $row['taller_id'] . ", asistente_id : " . $row['asistente_id'] . ", asistio : " . $row['asistio'] . "<br>";
}

<?php
include('../cnx.php');

// Preparar la consulta de inserción
$stmt = $pdo->prepare("SELECT id,nombre,fecha FROM taller");

// Ejecutar la consulta
$stmt->execute();

// Obtener los resultados
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Imprimir los resultados
foreach ($results as $row) {
    echo "ID: " . $row['id'] . ", Nombre: " . $row['nombre'] . ", Fecha: " . $row['fecha'] . "<br>";
}

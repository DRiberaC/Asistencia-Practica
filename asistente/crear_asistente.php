<?php
include('../cnx.php');



// try {
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];
$ocupacion = $_GET['ocupacion'];

echo "el nombre es $nombre. <br>";

// Preparar la consulta de inserción
$stmt = $pdo->prepare("INSERT INTO asistente (nombre, apellido, edad, ocupacion) VALUES (:nombre, :apellido, :edad, :ocupacion)");

// Bind parameters
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':apellido', $apellido);
$stmt->bindParam(':edad', $edad);
$stmt->bindParam(':ocupacion', $ocupacion);

// Ejecutar la consulta
$stmt->execute();
echo "Inserción exitosa";
// } catch (Exception $ex) {
//     echo "hubo un error al insertar los datos<br>intente nuevamente";
// }

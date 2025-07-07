<?php
include('conexion.php');
$articulo = $_POST['articulo'];
$cantidad = $_POST['cantidad'];
$ubicacion = $_POST['ubicacion'];



$stmt = $conn->prepare("INSERT INTO inventario (ARTICULO, CANTIDAD, UBICACION) VALUES (?, ?, ?)");
$stmt->bind_param("sis", $articulo, $cantidad, $ubicacion);

if ($stmt->execute()) {
    echo "✅ Información guardada correctamente.";
} else {
    echo "❌ Error al guardar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>


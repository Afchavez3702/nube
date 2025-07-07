<?php

// Crear conexión
$conn = new mysqli("localhost", "root", "", "nube");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}



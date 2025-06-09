<?php
require_once("db/db.php");

// Verificar si los datos del formulario han sido enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    $conn = Conectar::conexion();

    $stmt = $conn->prepare("INSERT INTO Empleado (DNI, NOMBRE, APELLIDO, EMAIL) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $dni, $nombre, $apellido, $email);

    if ($stmt->execute()) {
        echo "Empleado registrado exitosamente.";
    } else {
        echo "Error al registrar el empleado: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else { 
    echo "No se han recibido datos del formulario.";
}

?>
<?php
echo "Inicio index"."<br>";
// Llamada al fichero que inicia la conexión a la Base de Datos
require_once("db/db.php");

// Llamada al controlador
require_once("controllers/empleados_controller.php");

// Instancia y ejecución de acción directamente
$empleadoController = new EmpleadoController();
$empleadoController->registrar();  // O cualquier método inicial que quieras
echo "Fin index"."<br>";
?>
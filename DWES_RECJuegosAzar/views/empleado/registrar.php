<!DOCTYPE html>
<html>
<head>
    <title>Registro Empleado</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Registro de Empleado de Hacienda</h2>
    <form method="POST" action="controllers/procesar_registro_empleado.php">
        <label for="dni">DNI:</label>
        <input type="text" name="dni" required><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
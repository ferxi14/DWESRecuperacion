<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R009</title>
</head>
<body>
        <?php
            $cadena = "ABCDEFGHIJKLM";
            $cadenaEncriptada = "";

            for ($i = 0; $i < strlen($cadena); $i++) {
                $cadenaEncriptada .= chr(ord($cadena[$i]) + 6);
            }
            
            echo "texto original: " . $cadena;
            echo "<br>";
            echo "texto encriptado: " . $cadenaEncriptada;

        ?>
</body>
</html>
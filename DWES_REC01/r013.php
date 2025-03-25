<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R013</title>
</head>
<body>
        <?php
            $base = 2;
            $potencia = 10;
            
            echo "base " . $base . " - Potencia " . $potencia;
            echo "<br>";
            echo $base . " elevado a " . $potencia . " = " . pow($base, $potencia);

        ?>
</body>
</html>
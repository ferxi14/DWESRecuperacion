<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R012</title>
</head>
<body>
        <?php
            $primero = 0;
            $segundo = 1;

            echo "Secuencia Fibonacci: ";

            for ($i = 1; $i <= 15; $i++) {
                echo $primero . " ";

                $siguiente = $primero + $segundo;
                $primero = $segundo;
                $segundo = $siguiente;
            }

        ?>
</body>
</html>
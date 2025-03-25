<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R014</title>
</head>
<body>
    <table border="1" style="padding: 5px;">
        <?php
        for ($fila = 1; $fila <= 8; $fila++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                if (($fila + $col) % 2 == 0) {
                    echo "<td style='background-color: white; color: black;'>B</td>";
                } else {
                    echo "<td style='background-color: black; color: white;'>N</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</body>
</html>
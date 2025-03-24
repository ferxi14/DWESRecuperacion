<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R001</title>
</head>
<body>
    <table border="1">
        <?php
            $numero = 0;

            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 10; $j++) {
                    echo "<td>" . ($numero + $j) . "</td>";
                }
                echo "</tr>";
                $numero += 10;
            }
        ?>
    </table>
</body>
</html>
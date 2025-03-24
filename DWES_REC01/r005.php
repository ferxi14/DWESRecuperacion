<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R005</title>
</head>
<body>
    <table border="1">
        <?php
            $suma = 0;
            $contador = 0;
            echo "<tr>";
            for ($i = 1; $i <= 101; $i += 3) {
                echo "<td> $i </td>";
                $contador++;
                $suma += $i;

                if ($contador % 4 == 0) {
                    echo "<td> - </td> <td> Suma: $suma </td> </tr>";
                    $suma = 0;
                } else {
                    echo "<td> - </td>";
                }
            }
        ?>
    </table>
</body>
</html>
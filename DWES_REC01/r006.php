<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R006</title>
</head>
<body>
        <?php
            $num1 = 10;
            $num2 = 15;
            $sumaNormal = $num1 + $num2;
            $sumaEntreSi = 0;

            echo "Numero 1: $num1<br>";
            echo "Numero 2: $num2<br>";
            echo "$num1 + $num2 = $sumaNormal<br>";

            for ($i = $num1; $i <= $num2; $i++) {
                $sumaEntreSi += $i;
                if ($i == $num2) {
                    echo $i;
                } else {
                    echo $i . "+ ";   
                }
            }

            echo " = " . $sumaEntreSi . "<br>";
            
            
        ?>
</body>
</html>
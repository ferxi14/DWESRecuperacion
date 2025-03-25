<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R011</title>
</head>
<body>
        <?php
            $num1Hex = "2A";
            $num2Hex = "F";
            $suma = 0;

            $num1Dec = hexdec($num1Hex);
            $num2Dec = hexdec($num2Hex);

            $suma = $num1Dec + $num2Dec;

            echo "Numero 1 en hexa: " . $num1Hex;
            echo "<br>";
            echo "Numero 2 en hexa: " . $num2Hex;
            echo "<br>";
            echo $num1Dec . " + " . $num2Dec . " = " . $suma . " en base 10";
            echo "<br>";
            echo $num1Hex . " + " . $num2Hex . " = " . dechex($suma) . " en base 16";


        ?>
</body>
</html>
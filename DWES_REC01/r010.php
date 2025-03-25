<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R010</title>
</head>
<body>
        <?php
            $num1Bin = 1011;
            $num2Bin = 11;
            $num1Dec = bindec($num1Bin);
            $num2Dec = bindec($num2Bin);
            $suma = 0;
            
            echo "Número 1: " . $num1Bin;
            echo "<br>";
            echo "Número 2: " . $num2Bin;
            echo "<br>";
            
            $suma = $num1Dec + $num2Dec;

            $suma = decbin($suma);

            echo "$num1Bin + $num2Bin = $suma en binario";
            echo "<br>";
            
            $suma = bindec($suma);
            echo "$num1Dec + $num2Dec = $suma en decimal";
        ?>
</body>
</html>
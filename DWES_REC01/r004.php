<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R004</title>
</head>

<body>
    <?php
    $contador = 0;

    for ($i = 5; $i <= 101; $i += 3) {
        echo $i;
        $contador++;
        
        if ($contador % 3 == 0) {
            echo "<br>";
        } else {
            echo " - ";
        }
    }
    ?>
</body>

</html>
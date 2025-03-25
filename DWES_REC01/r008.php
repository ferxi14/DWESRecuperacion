<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R008</title>
</head>
<body>
        <?php
            $cadena = "En un lugar de la Mancha";
            $contadorA = 0;
            $contadorE = 0;
            $contadorI = 0;
            $contadorO = 0;
            $contadorU = 0;

            echo $cadena;
            echo "<br>";

            for ($i = 0; $i < strlen($cadena); $i++) {
                switch (strtolower($cadena[$i])) {
                    case 'a':
                        $contadorA++;
                        break;
                    case 'e':
                        $contadorE++;
                        break;
                    case 'i':
                        $contadorI++;
                        break;
                    case 'o':
                        $contadorO++;
                        break;
                    case 'u':
                        $contadorU++;
                        break;
                }
            }
            
            if ($contadorA > 0) {
                echo "A - $contadorA veces";
                echo "<br>";
            }
            if ($contadorE > 0) {
                echo "E - $contadorE veces";
                echo "<br>";
            }
            if ($contadorI > 0) {
                echo "I - $contadorI veces";
                echo "<br>";
            }
            if ($contadorO > 0) {
                echo "O - $contadorO veces";
                echo "<br>";
            }
            if ($contadorU > 0) {
                echo "U - $contadorU veces";
            }
        ?>
</body>
</html>
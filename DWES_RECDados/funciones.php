<?php

function limpiarCampo($campoFormulario) {
    $campoFormulario = trim($campoFormulario);
    $campoFormulario = htmlspecialchars($campoFormulario);
    $campoFormulario = stripslashes($campoFormulario);

    return $campoFormulario;
}

function tirarDados($numDados) {
    $resultados = array();
    for ($i = 0; $i < $numDados; $i++) {
        $resultados[] = rand(1, 6);
    }
    return $resultados;
}

function calcularPuntos($dados) {
    $puntos = array_sum($dados);
    $iguales = true;

    foreach ($dados as $dado) {
        if ($dado != $dados[0]) {
            $iguales = false;
            break;
        }
    }

    if (count($dados) > 1 && $iguales) {
        $puntos = 100;
    }
    return $puntos;
}

function generarTabla($jugadores) {
    print "Resultado";
    print "<table border='1' style='text-align: center;'>";

    foreach ($jugadores as $nombre => $dados) {
        echo "<tr>";
        echo "<td>" . $nombre . "</td>";

        foreach ($dados as $dado){
            echo "<td> <img src='./images/" . $dado . ".PNG' width='50' height='50'> </td>";
        }

        echo "</tr>";
    }
    print "</table>";
}

function resultados($puntuaciones, $ganadores) {
    print "<br>";
    
    foreach ($puntuaciones as $nombre => $puntos) {
        echo "Nombre: " . $nombre . " Puntos: " . $puntos . "<br>";
    }

    print "<h3>Ganadores</h3>";
    foreach ($ganadores as $nombre) {
        echo "Ganador: " . $nombre . "<br>";
    }

    echo "Numero de ganadores: " . count($ganadores) . "<br>";
}
?>
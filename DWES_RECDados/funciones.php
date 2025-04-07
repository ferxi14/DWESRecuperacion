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

function calcularPuntos() {
    
}

?>
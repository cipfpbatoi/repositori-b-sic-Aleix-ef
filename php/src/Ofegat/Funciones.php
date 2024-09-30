<?php
function Guiones($palabra) {
    $arrayGuiones = [];
    for ($i = 0; $i < strlen($palabra); $i++) {
        $arrayGuiones[$i] = '_';
    }
    return $arrayGuiones;
}

function ImprimirGuiones($arrayGuiones) {
    foreach ($arrayGuiones as $guion) {
        echo $guion . " "; 
    }
}

function Comprobar($letra, $palabra, &$arrayGuiones) {
    $arrayPalabra = str_split($palabra);
    $acierto = false;

    for ($i = 0; $i < count($arrayPalabra); $i++) {
        if ($letra == $arrayPalabra[$i]) {
            $arrayGuiones[$i] = $letra;
            $acierto = true;
        }
    }

    return $acierto;
}

?>

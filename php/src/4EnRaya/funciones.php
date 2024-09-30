<?php
function inicialitzarGraella()
{
    $graella = array();
    for ($i = 0; $i < 6; $i++) {
        $fila = array();
        for ($j = 0; $j < 7; $j++) {
            $fila[$j] = 0;
        }
        $graella[] = $fila;
    }
    return $graella;
}

function pintarGraella($graella)
{
    echo "<table>";
    foreach ($graella as $fila) {
        echo "<tr>";
        foreach ($fila as $celda) {
            if ($celda == 0) {
                echo "<td class='buid'></td>";
            } elseif ($celda == 1) {
                echo "<td class='player1'></td>";
            } else {
                echo "<td class='player2'></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

function ferMoviment(&$graella, $columna, $jugadorActual)
{
    for ($i = 5; $i >= 0; $i--) {
        if ($graella[$i][$columna] == 0) {
            $graella[$i][$columna] = $jugadorActual;
            return true;
        }
    }
    return false;
}
?>
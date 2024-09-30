<?php

$numeros = array(
    array(1,2,3,4,5),
    array(1,2,3,4,5)
);

function tabla ($numeros) {

    for ($i=0; $i < count($numeros[0]); $i++) { 
        echo "Tabla del " . $numeros[0][$i] . "<br>";
        for ($j=0; $j < count($numeros[1]); $j++) { 
            $multiplicar = $numeros[0][$i] * $numeros[1][$j];
            echo $multiplicar . " ";
        } echo "<br>" . "<br>";
    }

}
tabla($numeros);

?>

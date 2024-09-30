<?php
$numeros = array(1, 3, 5, 2 ,8); 


#Todo este metodo  se resume en return array_sum($numeros) / count($numeros);
function mediana($numeros) {
    $totalNumeros = 0;
    for ($i=0; $i < count($numeros); $i++) { 
        $totalNumeros = $totalNumeros + $numeros[$i];
    }
    $numNumeros = count($numeros);
    $media = $totalNumeros/$numNumeros;
    echo $media;
}


mediana($numeros); 
?>
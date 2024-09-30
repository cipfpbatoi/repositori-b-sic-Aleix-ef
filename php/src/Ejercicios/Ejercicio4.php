<?php   

$cadena = "Hola como estas";


function vocales($cadena) {
    $letras = str_split(strtolower($cadena));
    $totalVocales = 0;
    for ($i=0; $i < count($letras); $i++) { 
        if ($letras[$i]=="a" || $letras[$i]=="e" || $letras[$i]=="i" || $letras[$i]=="o" || $letras[$i]=="u") {
           $totalVocales ++;
        }
    }

    
    
    echo $totalVocales;
}

vocales($cadena);

?>
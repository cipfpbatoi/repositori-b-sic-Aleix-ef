<?php
$num2 = 1;
$num1 = 3;

function operaciones ($num2, $num1) {
    $suma = $num2 + $num1;
    $resta = $num2 - $num1;
    $multi = $num2 * $num1;
    $div = $num2 / $num1;

    echo "Suma: " . $suma . " Resta:" . $resta . " Multiplicacion:" . $multi . " Division:" . $div ;
}

operaciones($num1, $num2 );

?>
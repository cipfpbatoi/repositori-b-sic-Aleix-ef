<?php
$numpeque = 0;
$numgrande = 20;

function conFor ($numpeque, $numgrande) {
    for ($numpeque; $numpeque < $numgrande; $numpeque++) {
        if ($numpeque %2 == 0) {
            echo $numpeque . " ";
        }
    }
    echo "<br />";
}


function conWhile ($numpeque, $numgrande) {
while ($numpeque < $numgrande) {
    if ($numpeque %2 == 0) {
        echo $numpeque . " " ;
    }
    $numpeque++;
}
echo "<br />";
}

conFor($numpeque, $numgrande);
conWhile($numpeque, $numgrande);


?>
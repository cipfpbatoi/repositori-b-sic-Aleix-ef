<?php

$nota = 7;

$resultat = match ($nota) {
    10 => 'Excel·lent',
    8, 9=> 'Molt bé',
    5, 6, 7 => 'Bé',
    default => 'Insuficient',
};

echo $resultat;

?>
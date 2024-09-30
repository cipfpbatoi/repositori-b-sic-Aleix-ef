<?php
// Llegir el valor de la cookie
if (isset($_COOKIE['nom_usuari'])) {
    $nomUsuari = $_COOKIE['nom_usuari'];
    echo 'Hola, ' . $nomUsuari;

    // Modificar el valor de la cookie
    $salutacio = 'Hola, ' . $nomUsuari;
    setcookie('nom_usuari', $salutacio, time() + 3600, '/');
} else {
    echo 'Cookie not found.';
}
?>
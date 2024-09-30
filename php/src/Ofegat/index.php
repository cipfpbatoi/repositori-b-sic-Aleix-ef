<?php

include 'Funciones.php';

$palabra = "hola";

$arrayGuiones = Guiones($palabra);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $letra = $_POST['texto'];

    if (Comprobar($letra, $palabra, $arrayGuiones)) {
        echo "<p class='correct'>¡Letra correcta!</p>";
    } else {
        echo "<p class='incorrect'>¡Letra incorrecta!</p>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>L'Ofegat</title>
    <link rel="stylesheet" href="css.css"> 
</head>
<body>

    <h1>L'Ofegat</h1>

    <p>Palabra a adivinar:</p>
    <p><?php ImprimirGuiones($arrayGuiones); ?></p>

    <form action="" method="POST">
        <input type="text" id="texto" name="texto" maxlength="1" placeholder="Introduce una letra" required>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>

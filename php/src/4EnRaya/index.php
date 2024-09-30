<?php
include 'funciones.php';

if (!isset($_POST['graella'])) {
    $graella = inicialitzarGraella();
} else {
    $graella = unserialize($_POST['graella']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $columna = $_POST['columna'];
    $jugadorActual = $_POST['jugadorActual'];

    if (ferMoviment($graella, $columna, $jugadorActual)) {
        echo "<p>Jugador $jugadorActual ha puesto su ficha en la columna $columna.</p>";
    } else {
        echo "<p>Columna $columna llena. Elige otra columna.</p>";
    }
}

pintarGraella($graella);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>4 en Ratlla</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>

    <h1>4 en Ratlla</h1>

    <form method="post">
        <label for="columna">Elige una columna (0-6): </label>
        <input type="number" id="columna" name="columna" min="0" max="6" required>
        <input type="hidden" name="graella" value="<?php echo htmlspecialchars(serialize($graella)); ?>">
        <input type="hidden" name="jugadorActual" value="<?php echo isset($_POST['jugadorActual']) ? ($_POST['jugadorActual'] == 1 ? 2 : 1) : 1; ?>">
        <button type="submit">Hacer movimiento</button>
    </form>

</body>
</html>

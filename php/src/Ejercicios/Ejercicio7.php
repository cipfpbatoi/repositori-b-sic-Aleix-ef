<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>

<body>

    <h2>Registro de Usuario</h2>

    <form action="#" method="POST" autocomplete="off">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="email">Correo electrónico:</label><br>
        <input type="text" id="email" name="email"><br><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <label for="confirma_password">Confirma la contraseña:</label><br>
        <input type="password" id="confirma_password" name="confirma_password"><br><br>

        <input type="submit" value="Registrarse">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errores = [];
        $regex = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/";
        if (empty($_POST['nombre'])) {
            $errores[] = "* El campo \"Nombre\" es obligatorio.";
        }
        if (empty($_POST['email'])) {
            $errores[] = "* El campo \"Correo electrónico\" es obligatorio.";
        }
        if (empty($_POST['password'])) {
            $errores[] = "* El campo \"Contraseña\" es obligatorio.";
        }
        if (empty($_POST['confirma_password'])) {
            $errores[] = "* El campo \"Confirma la contraseña\" es obligatorio.";
        }
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        } else {
            $errores[] = "* El correo electronico no es valido.";
        }
        if ($_POST['password'] != $_POST['confirma_password']) {
            $errores[] = "* Las contraseñas no coinciden.";
        }
        if (preg_match($regex, $_POST['password'])) {
        } else {
            $errores[] = "* La contraseña no cumple con los requisitos.";
        }
        if (empty($errores)) {
            echo "<p style='color: green;'>Usuario registrado correctamente</p>";
        } else {
            foreach ($errores as $error) {
                echo "<p style='color: red;'>$error</p>";
            }
        }
    }
    ?>

</body>

</html>
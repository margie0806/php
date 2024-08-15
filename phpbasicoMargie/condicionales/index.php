<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="/styles.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Edad</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Página Inicial de PHP</h1>
    <form method="post" action="">
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = filter_input(INPUT_POST, 'edad', FILTER_VALIDATE_INT);

        if ($edad !== false && $edad !== null) {
            if ($edad >= 18) {
                echo "<div class='message success'>Eres mayor de edad ($edad años). Ingreso exitoso.</div>";
            } else {
                echo "<div class='message error'>No eres mayor de edad ($edad años). Registro fallido.</div>";
            }
        } else {
            echo "<div class='message error'>Por favor, ingresa una edad válida.</div>";
        }
    }
    ?>
</body>
</html>

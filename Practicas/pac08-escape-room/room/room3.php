<?php
session_start(); // Continuar la sesión

// Verificar que el usuario ha completado la habitación anterior
if (!isset($_SESSION['username']) || !isset($_SESSION['dificultat']) || $_SESSION['current_room'] < 3) {
    header('Location: room2.php'); // Redirigir a la habitación anterior si no tiene acceso
    exit;
}

include '../array/adivinanzas.php'; // Incluir el array de adivinanzas desde la carpeta array

// Obtener nivel de dificultad y la adivinanza actual para la habitación 3
$nivel = $_SESSION['dificultat'];
$adivinanza_actual = $adivinanzas[$nivel][$_SESSION['current_room'] - 1];

$message = '';
$is_correct = false; // Bandera para verificar si la respuesta es correcta

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $respuesta = strtolower(trim($_POST['answer']));
    if ($respuesta === $adivinanza_actual['respuesta']) {
        $is_correct = true; // Marcar como correcta
        session_destroy(); // Finalizar la sesión
        $message = "<div class='alert alert-success mt-3'>¡Felicidades! ¡Has completado el juego!</div>";
    } else {
        $message = "<div class='alert alert-danger mt-3'>Respuesta incorrecta. ¡Inténtalo de nuevo!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Habitació 3 - Final</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4" style="width: 22rem;">
        <!-- Ocultar título y pregunta si la respuesta es correcta -->
        <h2 class="card-title text-center <?= $is_correct ? 'hidden' : '' ?>">Habitació 3</h2>
        <p class="card-text <?= $is_correct ? 'hidden' : '' ?>"><?= $adivinanza_actual['pregunta']; ?></p>

        <!-- Formulario con clase oculta según el resultado -->
        <form method="POST" class="<?= $is_correct ? 'hidden' : '' ?>">
            <div class="mb-3">
                <input type="text" name="answer" class="form-control" required placeholder="Respuesta">
            </div>
            <button type="submit" class="btn btn-success w-100">Enviar</button>
        </form>

        <?= $message; ?> <!-- Muestra el mensaje de éxito o error -->

        <!-- Botón para volver al inicio si se completó correctamente -->
        <?php if ($is_correct): ?>
            <a href="../index.php" class="btn btn-primary w-100 mt-3">Volver al inicio</a>
        <?php endif; ?>
    </div>
</body>

</html>
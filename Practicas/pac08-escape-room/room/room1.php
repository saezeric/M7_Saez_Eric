<?php
session_start(); // Iniciar sesión

// Verificar que el usuario ha iniciado el juego
if (!isset($_SESSION['username']) || !isset($_SESSION['dificultat'])) {
    header('Location: ../index.php'); // Redirigir si no se ha iniciado sesión
    exit;
}

include '../array/adivinanzas.php'; // Incluir el array de adivinanzas desde la carpeta array

// Obtener nivel de dificultad y seleccionar una adivinanza
$nivel = $_SESSION['dificultat'];
$adivinanza_actual = $adivinanzas[$nivel][$_SESSION['current_room'] - 1]; // Obtener la adivinanza actual

// Manejar el envío del formulario
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $respuesta = strtolower(trim($_POST['answer'])); // Normalizar respuesta del usuario
    if ($respuesta === $adivinanza_actual['respuesta']) {
        $_SESSION['current_room']++; // Incrementar habitación
        header('Location: room2.php'); // Redirigir a la siguiente habitación
        exit;
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
    <title>Habitació 1</title>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4" style="width: 22rem;">
        <h2 class="card-title text-center">Habitació 1</h2>
        <p class="card-text"><?= $adivinanza_actual['pregunta']; ?></p>
        <form method="POST">
            <div class="mb-3">
                <input type="text" name="answer" class="form-control" required placeholder="Respuesta">
            </div>
            <button type="submit" class="btn btn-success w-100">Enviar</button>
        </form>
        <?= $message; ?> <!-- Muestra el mensaje de error si la respuesta es incorrecta -->
    </div>
</body>

</html>
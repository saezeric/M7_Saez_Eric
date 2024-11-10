<?php
session_start(); // Iniciar sesión para guardar datos del usuario

include './array/adivinanzas.php'; // Correcto: Carga el array desde la carpeta array

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Guardar datos en la sesión
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['dificultat'] = $_POST['dificultat'];
    $_SESSION['current_room'] = 1; // Comenzar en la primera habitación

    // Redirigir a la primera habitación
    header('Location: ./room/room1.php'); // Correcto: Redirige a room1.php en la carpeta room
    exit;
}
?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inici</title>
</head>

<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://basementescaperoom.com/los-angeles/template/images/room-header-bg-thebasement.jpg'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h2 class="card-title text-center">Benvingut!</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Nom:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dificultat" class="form-label">Nivell de Dificultat:</label>
                <select name="dificultat" id="dificultat" class="form-select" required>
                    <option value="">Selecciona un nivell</option>
                    <option value="facil">Fàcil</option>
                    <option value="mig">Mig</option>
                    <option value="dificil">Difícil</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Comença el Joc</button>
        </form>
    </div>
</body>

</html>
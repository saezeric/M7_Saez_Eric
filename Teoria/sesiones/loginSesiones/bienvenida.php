<?php

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>

<body>
    <header>
        <h1>Bienvenido <?= $_SESSION['username'] ?></h1>
        <a href="logout.php">Cerrar Sesión</a>
    </header>
</body>

</html>
<?php
session_start();
session_unset();

if (!isset($_SESSION['username']) || !isset($_SESSION['role']) || !isset($_SESSION['image'])) {
    header('Location: ./login.php'); // Redirigir si no se ha iniciado sesión
    exit;
}

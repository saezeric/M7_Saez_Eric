<?php
session_start();

if (isset($_SESSION['id'])) {
    editarLibro($_SESSION['id'], $_POST['titulo'], $_POST['autor'], $_POST['imagen'], $_POST['descripcion']);
} else {
    foreach ($_SESSION['libros'] as $libro) {
        $id = $libro['id'];
    }
    añadirLibro($id, $_POST['titulo'], $_POST['autor'], $_POST['imagen'], $_POST['descripcion']);
}

function editarLibro($id, $titulo, $autor, $imagen, $descripcion)
{
    unset($_SESSION['id']);
    $id = $id - 1;
    $_SESSION['libros'][$id] = ["id" => $id + 1, "titulo" => $titulo, "autor" => $autor, "imagen" => $imagen, "descripcion" => $descripcion];
    header('Location: ./home.php'); // Redirigir si no es admin
    exit;
}

function añadirLibro($id, $titulo, $autor, $imagen, $descripcion)
{
    $id++;
    $_SESSION['libros'][$id] = ["id" => $id, "titulo" => $titulo, "autor" => $autor, "imagen" => $imagen, "descripcion" => $descripcion];
    header('Location: ./home.php'); // Redirigir si no es admin
    exit;
}

function eliminarLibro($id)
{
    $id = $id - 1;
    unset($_SESSION['libros'][$id]);
    header('Location: ./home.php'); // Redirigir si no es admin
    exit;
}

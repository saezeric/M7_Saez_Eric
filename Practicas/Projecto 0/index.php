<?php
session_start();
require_once 'libro.php';
require_once 'biblioteca.php';

if (!isset($_SESSION['biblioteca'])) {
    $biblioteca = new Biblioteca();
    $biblioteca = serialize($biblioteca);
    $_SESSION['biblioteca'] = $biblioteca;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <title>Projecto 0 - Saez Eric</title>
</head>

<body>
    <section class="flex flex-col justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-6 w-full max-w-screen-xl">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-6">Nuestros Libros</h2>
            <div class="flex space-x-2 mb-5">
                <input type="text" id="buscarLibro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escriba el nombre del libro" />
                <button class="inline-block bg-blue-500 text-white font-semibold py-2 px-6 rounded-lg shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">Buscar</button>
            </div>
            <?php
            // Mostrar todos los libros en la biblioteca
            echo $biblioteca->mostrarLibros();
            ?>
            <div class="px-5 pt-5 text-center">
                <a href="añadirLibro.php" class="inline-block bg-blue-500 text-white font-semibold py-2 px-6 rounded-lg shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    Añadir Nuevo Libro
                </a>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>
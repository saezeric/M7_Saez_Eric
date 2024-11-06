<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Tienda Mercadona</title>
    <?php

    include("./styles/style.php");

    ?>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Bienvenido a la Tienda Mercadona</h2>
        <p class="text-center">Por favor, ingresa tus datos para continuar</p>

        <form action="index.php" method="POST" class="mt-4">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono">
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">URL de la foto de perfil:</label>
                <input type="url" class="form-control" id="foto" name="foto">
            </div>

            <button type="submit" class="btn btn-primary w-100">Ingresar</button>
        </form>
    </div>
</body>

</html>
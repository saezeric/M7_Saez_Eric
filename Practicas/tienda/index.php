<?php

include("./includes/funciones.php");
include("./data/productos.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Productos</title>
    <?php

    include("./styles/style.php");

    ?>
</head>

<body>

    <?php

    include("./includes/header.php");

    ?>

    <main class="my-5">

        <div class="container mt-5">
            <h2 class="text-center mb-4">Lista de Productos</h2>
            <?php
            // Mostrar la tabla de productos
            generarTablaProductos($productos);

            // Mostrar la información de contacto si existen los datos
            if (isset($_POST['nombre']) && isset($_POST['telefono']) && isset($_POST['foto'])) {
                muestraInfoContacto($_POST['nombre'], $_POST['telefono'], $_POST['foto']);
            }
            ?>
        </div>

    </main>

    <?php

    include("./includes/footer.php");

    ?>

</body>

</html>
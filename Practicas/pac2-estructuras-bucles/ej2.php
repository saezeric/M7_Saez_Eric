<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-font {
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <main>
            <h1 class="text-center mb-4">Tablas de multiplicar</h1>
            <div class="row d-flex mb-5">
                <?php
                for ($i = 1; $i <= 11; $i++) {
                    echo "<div class='mx-auto col-4 col-md-2 m-2'>";
                    echo "<h2 class='h3'>Tabla del $i</h2>";
                    for ($j = 0; $j <= 9; $j++) {
                        $result = $i * $j;
                        echo "<div class='p-2 text-light bg-dark custom-font'>$i x $j = $result</div>";
                    }
                    echo "</div>";
                }
                ?>
            </div>
        </main>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
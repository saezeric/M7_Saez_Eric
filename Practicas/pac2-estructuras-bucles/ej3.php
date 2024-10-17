<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parell o Senar</title>
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
            <h1 class="text-center mb-5">Par o Impar</h1>
            <div class="mb-5">
                <?php
                $numeroRand = rand(0, 100);
                if ($numeroRand % 2 == 0) {
                    echo "<h2 class='text-center list-group-item list-group-item-action active m-0'>El numero es Par</h2>";
                    echo "<div class='mx-auto text-center text-light bg-dark p-3'>$numeroRand</div>";
                } else {
                    echo "<h2 class='text-center list-group-item list-group-item-action active m-0'>El numero es Impar</h2>";
                    echo "<div class='mx-auto text-center text-light bg-dark p-3'>$numeroRand</div>";
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
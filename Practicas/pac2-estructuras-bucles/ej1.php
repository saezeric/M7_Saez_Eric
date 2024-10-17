<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares del 50 al 500</title>
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
    <div class="container mt-5">
        <main>
            <h1 class="text-center mb-4">Números Pares del 50 al 500</h1>
            <div class="row">
                <?php
                for ($i = 50; $i <= 500; $i += 2) {
                    echo "<div class='col-4 col-md-2 mb-3'>
                            <div class='card text-center p-3 text-light bg-dark custom-font'>$i</div>
                          </div>";
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
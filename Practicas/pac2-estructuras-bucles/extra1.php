<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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

            <?php
            $numeroRand = rand(0, 100);
            $cont = 0;
            echo "<div class='container'>";
            echo "<h1 class='text-center my-5'>Nombre generado: $numeroRand</h1>";
            echo "<h2 class='text-center my-5'>Divisors de $numeroRand:</h2>";
            echo "<div class='row justify-content-center'>";
            for ($i = 1; $i <= $numeroRand; $i++) {
                if ($numeroRand % $i == 0) {
                    echo "
                    <div class='col-4 col-sm-auto mb-3'>
                        <div class='card text-center p-3 text-light bg-dark custom-font'>$i</div>
                    </div>";
                    $cont++;
                }
            }

            echo "</div>";
            if ($cont == 2) {
                echo "<div class='h2 mt-5 text-danger text-center'>$numeroRand es primo</div>";
            } else {
                echo "<div class='h2 mt-5 text-danger text-center'>$numeroRand no es primo</div>";
            }
            echo "</div>";
            ?>

        </main>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
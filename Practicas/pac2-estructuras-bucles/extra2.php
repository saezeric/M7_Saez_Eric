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
    <main>
        <div class="container">
            <h1 class="text-center mt-5">Classificacion de temperatures</h1>
            <div class="row my-5 justify-content-center">
                <?php
                for ($i = 0; $i < 10; $i++) {
                    $numeroRand = rand(-10, 40);
                    if ($numeroRand < 10) {
                        echo '<div class="col-4 my-3">
                                    <div class="card bg-primary text-center text-light p-5">
                                        <div class="h1">' . $numeroRand . 'ºC</div>
                                        <div>Frio</div>
                                    </div>
                                  </div>';
                    } elseif ($numeroRand >= 10 && $numeroRand <= 25) {
                        echo '<div class="col-4 my-3">
                                    <div class="card bg-warning text-center p-5">
                                        <div class="h1">' . $numeroRand . 'ºC</div>
                                        <div>Temperatura Suave</div>
                                    </div>
                                  </div>';
                    } elseif ($numeroRand > 25) {
                        echo '<div class="col-4 my-3">
                                    <div class="card bg-danger text-center text-light p-5">
                                        <div class="h1">' . $numeroRand . 'ºC</div>
                                        <div>Calor</div>
                                    </div>
                                  </div>';
                    }

                    $media += $numeroRand;
                }

                $resMedia = $media / 10;

                ?>
            </div>
            <?php
            echo "<p class='h2 bold text-center'>La temperatura media es de: $resMedia</p>";
            ?>
        </div>
    </main>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OCINE MAGIC BADALONA</title>

    <?php

    include('./style/style.php')

    ?>

</head>

<!-- Añadimos el array peliculas -->
<?php

include('./pages/pelicules.php');

?>

<body>

    <?php

    include('./components/header.php')

    ?>

    <!-- Peliculas -->
    <main>
        <div class="my-5">
            <div class="container">
                <h1 class="text-center pb-4 border-bottom">CARTELLERA</h1>
                <div class="row justify-content-center">
                    <?php
                    for ($i = 0; $i < 10; $i++) {
                        echo '
                    <div class="card movie_card">
                        <a href="./pages/detall.php?pelicula=' . $peliculas[$i]["nombre"] . '">
                            <img src="' . $peliculas[$i]["imagen_url"] . '" class="card-img-top" alt="ejemplo">
                        </a>
                        <div class="card-body">
                            <a href="./pages/trailer.php?pelicula=' . $peliculas[$i]["nombre"] . '">
                            <i class="fas fa-play play_button" data-toggle="tooltip" data-placement="bottom" title="Veure Trailer">
                            </i></a>
                            <h5 class="card-title">' . $peliculas[$i]["nombre"] . '</h5>
                            <span class="movie_info">' . $peliculas[$i]["horarios"][0] . ' /</span>
                            <span class="movie_info">' . $peliculas[$i]["horarios"][1] . ' /</span>
                            <span class="movie_info">' . $peliculas[$i]["horarios"][2] . '</span>
                            <span class="movie_info float-right"><i class="fas fa-star"></i> ' . $peliculas[$i]["valoracion"] . '</span>
                        </div>
                    </div>';
                    }
                    ?>
                </div>
            </div>
    </main>

    <?php

    include('./components/footer.php')

    ?>
    </main>
</body>

</html>
<?php

include('./pelicules.php');
$pelicula = $_GET['pelicula'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trailer <?php echo $pelicula; ?></title>

    <?php

    include('../style/style.php')

    ?>

</head>

<body>

    <?php

    include('../components/header.php')

    ?>

    <main class="mb-5">
        <div class="container">
            <h1 class="p-3 border-bottom" style="color: black;">Trailer <?php echo $pelicula ?></h1>
            <?php
            for ($i = 0; $i < 10; $i++) {
                if ($pelicula == $peliculas[$i]["nombre"]) {
                    echo '<iframe class="mt-4" width="1280" height="720" src="' . $peliculas[$i]["trailer_url"] . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
                }
            }
            ?>
        </div>
    </main>

    <?php

    include('../components/footer.php')

    ?>

</body>

</html>
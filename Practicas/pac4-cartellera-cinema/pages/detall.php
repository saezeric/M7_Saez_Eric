<?php

include('./pelicules.php');
$pelicula = $_GET['pelicula'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pelicula; ?></title>

    <?php

    include('../style/style.php')

    ?>

</head>

<body>

    <?php

    include('../components/header.php')

    ?>

    <main>
        <div class="mt-2 mb-5">
            <div class="container">
                <div>
                    <?php

                    for ($i = 0; $i < 10; $i++) {
                        if ($pelicula == $peliculas[$i]["nombre"]) {
                            echo '
                            <h1 class="p-3 border-bottom" style="color: black;">' . $peliculas[$i]["nombre"] . '</h1>
                            <div class="my-4 row justify-content-center text-dark">
                                <div class="col-12 col-md-4">
                                    <img class="card w-100" src="' . $peliculas[$i]["imagen_url"] . '" alt="' . $peliculas[$i]["nombre"] . '">
                                </div>
                                <div class="col-12 col-md-8">
                                <p>' . $peliculas[$i]["sinopsis"] . '</p>
                                    <p><strong>Durada: </strong>' . $peliculas[$i]["duracion"] . '</p>
                                    <p><strong>Director: </strong>' . $peliculas[$i]["director"] . '</p>
                                    <p><strong>Actors: </strong>' . $peliculas[$i]["reparto"][0] . ', 
                                    ' . $peliculas[$i]["reparto"][1] . ',
                                    ' . $peliculas[$i]["reparto"][2] . ',
                                    ' . $peliculas[$i]["reparto"][3] . '
                                    </p>
                                    <p><strong>Qualificació: </strong>' . $peliculas[$i]["calificacion"] . '</p>
                                    <p><strong>Gènere: </strong>' . $peliculas[$i]["genero"] . '</p>
                                    <div class="border border-dark mx-auto p-1 row bg-light">
                                        <div class="col-6 p-1 w-25">
                                            Horaris
                                        </div>
                                        <div class="d-flex col-6">
                                            <div class="border p-1 px-2 bg-danger text-light">' . $peliculas[$i]["horarios"][0] . '</div>
                                            <div class="border p-1 px-2 mx-3 bg-danger text-light ">' . $peliculas[$i]["horarios"][1] . '</div>
                                            <div class="border p-1 px-2 bg-danger text-light">' . $peliculas[$i]["horarios"][2] . '</div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                    }
                    ?>
                </div>
            </div>
    </main>

    <?php

    include('../components/footer.php')

    ?>

</body>

</html>
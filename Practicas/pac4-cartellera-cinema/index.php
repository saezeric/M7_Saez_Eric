<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carousel Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/f16458d8c0.js" crossorigin="anonymous"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        /* GLOBAL STYLES
    --------------------------------------------- */
        /* Padding below the footer and lighter body text */

        body {
            padding-top: 3rem;
            padding-bottom: 3rem;
            color: #5a5a5a;
        }


        /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------- */

        /* Carousel base class */
        .carousel {
            margin-bottom: 4rem;
        }

        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
            height: 32rem;
        }

        .carousel-item>img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 32rem;
        }


        /* MARKETING CONTENT
-------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .marketing h2 {
            font-weight: 400;
        }

        .marketing .col-lg-4 p {
            margin-right: .75rem;
            margin-left: .75rem;
        }


        /* Featurettes
------------------------- */

        .featurette-divider {
            margin: 5rem 0;
            /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        .featurette-heading {
            font-weight: 300;
            line-height: 1;
            letter-spacing: -.05rem;
        }


        /* RESPONSIVE CSS
-------------------------------------------------- */

        @media (min-width: 40em) {

            /* Bump up size of carousel content */
            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
            }

            .featurette-heading {
                font-size: 50px;
            }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }

        body {
            margin: 0px;
            padding: 0px;
        }


        /* Cards para las peliculas */
        /* ========================================================= */

        img {
            -webkit-user-drag: none;
            -moz-user-drag: none;
            -o-user-drag: none;
            user-drag: none;
        }

        img {
            pointer-events: none;
        }

        .movie_card {
            padding: 0 !important;
            width: 22rem;
            margin: 14px;
            border-radius: 10px;
            box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.2), 0 4px 15px 0 rgba(0, 0, 0, 0.19);
        }

        .movie_card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 33rem;
        }

        .movie_info {
            color: #5e5c5c;
        }

        .movie_info i {
            font-size: 20px;
        }

        .card-title {
            width: 80%;
            height: 4rem;
        }

        .play_button {
            background-color: #ff3d49;
            position: absolute;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            right: 20px;
            bottom: 111px;
            font-size: 27px;
            padding-left: 21px;
            padding-top: 16px;
            color: #FFFFFF;
            cursor: pointer;
        }

        .credits {
            margin-top: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 2px solid #8e24aa;
            font-size: 18px;
        }

        .credits .card-body {
            padding: 0;
        }

        .credits p {
            padding-top: 15px;
            padding-left: 18px;
        }

        .credits .card-body i {
            color: #8e24aa;
        }

        .fa-star {
            color: yellow;
        }
    </style>
</head>

<!-- Añadimos el array peliculas -->
<?php

include('./pages/pelicules.php');

?>

<body>
    <!-- Cabecera -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-white">
            <div class="container py-3">
                <a class="text-center w-50 navbar-brand font-weight-bold text-dark m-3" style="font-size: 30px;" href="#"><img src="https://www.ocinemagic.es/images/logo-ocine-mag.png" alt="OCINE MAGIC"></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav m-5">
                        <li class="nav-item active">
                            <a class="nav-link text-dark font-weight-bold" aria-current="page" href="#">CARTELLERA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="#">BAR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="#" tabindex="-1" aria-disabled="true">EL CINEMA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="#" tabindex="-1" aria-disabled="true">SCREEN X</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="#" tabindex="-1" aria-disabled="true">SALA KIDS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="#" tabindex="-1" aria-disabled="true">FIDELITY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="#" tabindex="-1" aria-disabled="true">ALTRES CINES</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

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
                            <i class="fas fa-play play_button" data-toggle="tooltip" data-placement="bottom" title="Ver Trailer">
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

    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    </main>
</body>

</html>
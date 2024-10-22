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

    <main>

    </main>

    <?php

    include('../components/footer.php')

    ?>

</body>

</html>
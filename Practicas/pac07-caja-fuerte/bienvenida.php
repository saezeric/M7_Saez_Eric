<?php

include("./array/array.php");

$rand = rand(0, 3);
$casas = array_keys($casas_info);


?>

<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvingut a la teva casa de Hogwarts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: <?= $casas_info[$casas[$rand]]["background_color"] ?>;">
    <div class="container text-center" style="color: <?= $casas_info[$casas[$rand]]["text_color"] ?>;">
        <h1>¡Bienvenido a tu nueva casa en Howarts</h1>
        <div class="welcome-message mt-4 border-0 rounded" style="background-color: <?= $casas_info[$casas[$rand]]["message_background"] ?>;">
            <?= '<h2>¡' . $_POST["nombre"] . ', has sido seleccionado para ' . $casas[$rand] . '!</h2>' ?>
            <?= '<p>' . $casas_info[$casas[$rand]]["welcome_message"] . '</p>' ?>
            <?= '<img src="' . $casas_info[$casas[$rand]]["image"] . '" alt="">' ?>

        </div>
    </div>
</body>

</html>
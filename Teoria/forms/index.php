<h1>Hola soy index</h1>

<?php

echo 'has escogido la asignatura: ' . $_GET["asignatura"];

// foreach ($_GET['asignatura'] as $asignatura) {
//     echo $asignatura;
// }

echo "<br><br><br><br>";
foreach ($_POST['frutas'] as $fruta) {
    echo $fruta . '<br>';
}
